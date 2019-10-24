<?php

namespace OpenActive\Concerns;

use OpenActive\Helpers\JsonLd as JsonLdHelper;
use OpenActive\Helpers\Str;

trait Serializer
{
    /**
     * Returns the JSON-LD representation of the given instance.
     *
     * @param object $obj The given instance to convert to JSON-LD
     * @param bool $prettyPrint Whether to pretty-print the JSON-LD output
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj, $prettyPrint = false)
    {
        $data = static::toArray($obj);

        if($prettyPrint === true) {
            return json_encode($data, JSON_PRETTY_PRINT);
        }

        return json_encode($data);
    }

    /**
     * Returns the JSON-LD associative array representation of the given instance.
     *
     * @param object $obj The given instance to convert to JSON-LD
     * @param bool $prettyPrint Whether to pretty-print the JSON-LD output
     * @return array JSON-LD associative array representation of the given instance.
     */
    public static function toArray($obj)
    {
        return JsonLdHelper::prepareDataForSerialization($obj);
    }

    /**
     * Returns an object from a given JSON-LD representation.
     *
     * @param string|array If a string is provided, we attempt JSON-decoding first
     * @return object
     */
    public static function deserialize($data)
    {
        // If a string is provided, we attempt JSON-decoding first
        if (is_string($data)) {
            $data = json_decode($data, true);
        }

        $class = get_called_class();
        $self = new $class([]);

        // If data provided is not an array, return an empty class
        if (is_array($data) === false) {
            return $self;
        }

        foreach ($data as $key => $value) {
            $attrName = Str::camel($key);
            $setterName = "set" . Str::pascal($key);

            if (is_object($value)) {
                $self->$attrName = $value::deserialize($value);
            } elseif (is_array($value)) {
                $self->$attrName = static::deserializeValue($value);
            } elseif ($key !== "@context" && $key !== "type") {
                // Calling the setter will type-enforce it
                $self->$setterName($value);
            }
        }

        return $self;
    }
}
