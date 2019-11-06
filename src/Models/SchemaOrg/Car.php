<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Car extends \OpenActive\Models\SchemaOrg\Vehicle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Car";
    }

}
