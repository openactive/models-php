<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusStop extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusStop";
    }

}
