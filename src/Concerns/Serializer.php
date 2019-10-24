<?php

namespace OpenActive\Concerns;

use OpenActive\Helpers\JsonLd as JsonLdHelper;

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
        $data = JsonLdHelper::prepareDataForSerialization($obj);

        if($prettyPrint === true) {
            return json_encode($data, JSON_PRETTY_PRINT);
        }

        return json_encode($data);
    }
}
