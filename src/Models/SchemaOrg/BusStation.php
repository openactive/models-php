<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusStation extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusStation";
    }

}
