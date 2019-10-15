<?php

namespace OpenActive;

use OpenActive\Validators\BaseValidator;
use OpenActive\Helpers\Str;

class BaseModel
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * @return object
     */
    public static function deserialize($data)
    {
        $class = get_called_class();
        $self = new $class([]);

        foreach ($data as $key => $value) {
            $attr_name = Str::snake($key);

            if (is_scalar($value)) {
                $self->$attr_name = $value;
            } else {
                $self->$attr_name = ModelFactory::deserialize($value);
            }
        }

        return $self;
    }

    /**
     * Returns the JSON-LD representation of this instance.
     *
     * @return string JSON-LD string representation of this instance.
     */
    public static function serialize($obj)
    {
        // Get all defined methods for the object
        // Please note we don't use get_object_vars() here,
        // As it would only return the public attributes
        // (BaseModel's are all protected)
        $class_methods = get_class_methods($obj);

        $data = array();

        // Loop all class methods, find the getters
        // and map defined attributes, normalizing attribute name
        foreach($class_methods as $method_name) {
            if(substr($method_name, 0, 3) !== "get") {
                continue;
            }

            // Attribute name is method name without the leading "get" string
            $attr_name = substr($method_name, 3);

            // Attribute value is the result of calling $method_name on $obj
            $data[$attr_name] = $obj->$method_name();
        }

        $json = json_encode($data);

        // TODO: do we need this? as PHP does not provide context
        return self::removeAllButFirstContext($json);
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            $method = 'get' . Str::pascal($name);
            return $this->$method();
        }
    }

    public function __set($name, $value)
    {
        if (property_exists($this, "_${name}")) {
            $method = 'set' . Str::pascal($name);
            $this->$method($value);
        }
    }

    public function __isset($name)
    {
        if ($this->__get($name) === null) {
            return false;
        }
    }

    /**
     * Check if the given value is of at least one of the given types.
     *
     * @param mixed $value
     * @param string[] $types
     * @return bool
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public static function checkTypes($value, $types)
    {
        foreach($types as $type) {
            $validator = BaseValidator::getValidator($type);

            if($validator->run($value) === true) {
                // If validation passes for the given type
                // We coerce the type to mitigate PHP loose types
                return $validator->coerce($value);
            }
        }

        // If validation does not pass for any of the provided types,
        // type invalid
        // TODO bootstrap TypeError for PHP<7 compatibility
        throw new \Exception("The first argument type does not match any of the declared parameter types.");
    }

    /**
     * @return string
     */
    protected static function removeAllButFirstContext($json)
    {
        $schema_context_property = "\"@context\":\"http://schema.org\",";
        $open_active_context_property = "\"@context\":\"https://openactive.io/\",";
        $open_active_context_property_with_beta = "\"@context\":[\"https://openactive.io/\",\"https://openactive.io/ns-beta\"],";

        $schema_id_json = "\"@id\":";
        $open_active_id_json = "\"id\":";
        $schema_type_json = "\"@type\":";
        $open_active_type_json = "\"type\":";

        // Only include beta context if there are beta properties present
        $context_property = strpos($json, "\"beta:") !== FALSE ?
            $open_active_context_property_with_beta :
            $open_active_context_property;

        // We add the one to represent the opening curly brace.
        $startIndex = strlen($schema_context_property) + 1;

        // Replace OpenActive context and properties
        $json = substr_replace($schema_context_property, "", $startIndex, strlen($json) - $startIndex);
        $json = substr_replace($schema_context_property, $context_property, 0, startIndex);
        $json = substr_replace($schema_id_json, $open_active_id_json, 0, strlen($json));
        $json = substr_replace($schema_type_json, $open_active_type_json, 0, strlen($json));

        return $json;
    }
}
