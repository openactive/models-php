<?php

namespace OpenActive\Helpers;

class JsonLd
{
    /**
     * Returns the JSON-LD type from a given thing.
     *
     * @param \OpenActive\BaseModel $thing
     * @return string
     */
    public static function getType($thing)
    {
        // Append "type" attribute for all other classes
        $reflect = new \ReflectionClass($thing);

        // Type is just the non-FQ class name
        return $reflect->getShortName();
    }
}
