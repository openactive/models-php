<?php

namespace OpenActive;

use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\Helpers\Str;
use OpenActive\Concerns\Serializer;
use OpenActive\Concerns\TypeChecker;

class BaseModel implements SerializerInterface, TypeCheckerInterface
{
    use Serializer, TypeChecker;

    /**
     * Gets or sets the identifier used to uniquely identify things that are being described in the document with
     * IRIs or blank node identifiers.
     * To be able to externally reference nodes in a graph, it is important that nodes have an identifier. IRIs
     * are a fundamental concept of Linked Data, for nodes to be truly linked, dereferencing the identifier should
     * result in a representation of that node.This may allow an application to retrieve further information about
     * a node. In JSON-LD, a node is identified using the "@id" keyword:
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
            $this->defineProperty($key, $value);
        }
    }

    public function defineProperty($key, $value)
    {
        //strip off the prefix if there is one
        if (($pos = strpos($key, ':')) !== false) {
            $key = substr($key, $pos + 1);
        } elseif ($key[0] === '@') {
            $key = substr($key, 1);
        }

        // Don't try to set "@context" or type
        if ($key === "context" || $key === "type") {
            return;
        }

        // Build setter name
        $setterName = "set" . Str::pascal($key);

        // Calling the setter will type-enforce the values

        if (is_array($value)) {
            $this->$setterName(static::deserializeValue($value));
            return;
        }

        $this->$setterName($value);
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
        $type = null;
        if (array_key_exists('@type', $value)) { $type = $value['@type']; }
        if (array_key_exists('type', $value)) { $type = $value['type']; }

        if ($type) {
            // If type is schema.org target right namespace
            if (strpos($type, "schema:") === 0) {
                $classname = "\\OpenActive\\Models\\SchemaOrg\\" .
                    str_replace("schema:", "", $type);
            } elseif (strpos($type, "playfinder:") === 0) {
                $classname = "\\OpenActive\\Models\\Playfinder\\" .
                    str_replace("playfinder:", "", $type);
            } else {
                $classname = "\\OpenActive\\Models\\OA\\".
                    // If the type is in beta, remove the prefix to resolve the model
                    str_replace("beta:", "", $type);
            }

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

    public static function fieldList() {
        return [
            'id' => '@id'
        ];
    }
}
