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
     * @param bool $schema Whether to add a Schema.org context
     * @param callable[] $modifiers A list of closures with this signature: function (string $class, string $key, $value): mixed
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj, $prettyPrint = false, $schema = false, array $modifiers = [])
    {
        $data = static::toArray($obj, $schema, $modifiers);

        if($prettyPrint === true) {
            return json_encode($data, JSON_PRETTY_PRINT);
        }

        return json_encode($data);
    }

    /**
     * Returns the JSON-LD associative array representation of the given instance.
     *
     * @param object $obj The given instance to convert to JSON-LD
     * @param bool $schema Whether to add a Schema.org context
     * @param callable[] $modifiers A list of closures with this signature: function (string $class, string $key, $value): mixed
     * @return array JSON-LD associative array representation of the given instance.
     */
    public static function toArray($obj, $schema = false, array $modifiers = [])
    {
        return JsonLdHelper::prepareDataForSerialization($obj, null, $schema, $modifiers);
    }

    /**
     * Returns an object from a given JSON-LD representation.
     *
     * @param string|array If a string is provided, we attempt JSON-decoding first
     * @param callable[] $modifiers A list of closures with this signature: function (string $class, string $key, $value): mixed
     * @return object
     */
    public static function deserialize($data, array $modifiers = [])
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
            foreach ($modifiers as $modifier) {
                $value = $modifier($class, $key, $value);
            }
            $self->defineProperty($key, $value);
        }

        return $self;
    }
}
