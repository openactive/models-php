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
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj, $prettyPrint = false, $schema = false)
    {
        $data = static::toArray($obj, $schema);

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
     * @return array JSON-LD associative array representation of the given instance.
     */
    public static function toArray($obj, $schema = false)
    {
        return JsonLdHelper::prepareDataForSerialization($obj, null, $schema);
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
            $self->defineProperty($key, $value);
        }

        return $self;
    }
}
