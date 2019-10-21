<?php

namespace OpenActive\Contracts;

interface SerializerInterface
{
    /**
     * Returns the JSON-LD representation of the given instance.
     *
     * @param object $obj The given instance to convert to JSON-LD
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj);

    /**
     * Returns an object from a given JSON-LD representation.
     *
     * @param string|array If a string is provided, we attempt JSON-decoding first
     * @return object
     */
    public static function deserialize($data);
}
