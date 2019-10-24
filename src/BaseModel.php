<?php

namespace OpenActive;

use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\Helpers\JsonLd as JsonLdHelper;
use OpenActive\Helpers\Str;
use OpenActive\Concerns\TypeChecker;

class BaseModel implements SerializerInterface, TypeCheckerInterface
{
    use TypeChecker;

    /**
     * Gets or sets the identifier used to uniquely identify things that are being described in the document with
     * IRIs or blank node identifiers.
     * To be able to externally reference nodes in a graph, it is important that nodes have an identifier. IRIs
     * are a fundamental concept of Linked Data, for nodes to be truly linked, dereferencing the identifier should
     * result in a representation of that node.This may allow an application to retrieve further information about
     * a node. In JSON-LD, a node is identified using the @id keyword:
     *
     * @var string
     */
    protected $id;

    /**
     * Gets the context used to define the short-hand names that are used throughout a JSON-LD document.
     * These short-hand names are called terms and help developers to express specific identifiers in a compact
     * manner.
     * When two people communicate with one another, the conversation takes place in a shared environment,
     * typically called "the context of the conversation". This shared context allows the individuals to use
     * shortcut terms, like the first name of a mutual friend, to communicate more quickly but without losing
     * accuracy. A context in JSON-LD works in the same way. It allows two applications to use shortcut terms to
     * communicate with one another more efficiently, but without losing accuracy.
     * Simply speaking, a context is used to map terms to IRIs. Terms are case sensitive and any valid string that
     * is not a reserved JSON-LD keyword can be used as a term.
     *
     * @var string[]
     */
    public static $context = [
        "https://openactive.io/",
        "https://openactive.io/ns-beta"
    ];

    /**
     * Create a new model instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            // Make sure attribute is cased properly
            $attributeName = Str::camel($key);

            $this->$attributeName = static::deserializeValue($value);
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setId($id)
    {
        $types = array(
            "string",
        );

        $id = self::checkTypes($id, $types);

        $this->id = $id;
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
        if(is_string($data)) {
            $data = json_decode($data, true);
        }

        $class = get_called_class();
        $self = new $class([]);

        // If data provided is not an array, return an empty class
        if(is_array($data) === FALSE) {
            return $self;
        }

        foreach ($data as $key => $value) {
            $attrName = Str::camel($key);
            $setterName = "set" . Str::pascal($key);

            if (is_object($value)) {
                $self->$attrName = $value::deserialize($value);
            } else if (is_array($value)) {
                $self->$attrName = static::deserializeValue($value);
            } else if($key !== "@context" && $key !== "type") {
                // Calling the setter will type-enforce it
                $self->$setterName($value);
            }
        }

        return $self;
    }

    /**
     * Returns a value from a given JSON-LD deserialized array.
     *
     * @param mixed If an array is provided, we recursively deserialize it
     * @return mixed
     */
    public static function deserializeValue($value)
    {
        // If not provided an array, return same value
        if (is_array($value) === FALSE) {
            return $value;
        }

        // If an associative array with a type, return its deserialization form,
        // so that it gets converted from array to object
        // (associative arrays are still arrays in PHP)
        if (array_key_exists("type", $value)) {
            $classname = "\\OpenActive\\Models\\OA\\".$value["type"];

            return $classname::deserialize($value);
        }

        // NOTE: OpenActive is more strict than schema.org in this regard, so commenting out this for now
        // If one-item array, deserialize into the actual item
        // if(count($value) === 1) {
        //    return static::deserializeValue($value[0]);
        // }

        // If providing a non-associative array
        // Loop through it and serialize each item if needed
        foreach($value as $idx => $item) {
            $value[$idx] = static::deserializeValue($item);
        }

        return $value;
    }

    /**
     * Returns the JSON-LD representation of the given instance.
     *
     * @param \OpenActive\BaseModel $obj The given instance to convert to JSON-LD
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj)
    {
        // Get data ready to be encoded
        $data = JsonLdHelper::prepareDataForSerialization($obj);

        return json_encode($data);
    }

    public function __get($name)
    {
        // Always makes sure name casing is correct
        if (property_exists($this, Str::camel($name))) {
            $method = 'get' . Str::pascal($name);

            return $this->$method();
        }
    }

    public function __set($name, $value)
    {
        // Always makes sure name casing is correct
        if (property_exists($this, Str::camel($name))) {
            $method = 'set' . Str::pascal($name);

            if (is_array($value)) {
                $value = static::deserializeValue($value);
            }

            $this->$method($value);
        }
    }

    public function __isset($name)
    {
        if ($this->__get($name) === null) {
            return false;
        }
    }
}
