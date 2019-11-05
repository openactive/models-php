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
    static public function getType()
    {
        return "schema:Car";
    }

}
