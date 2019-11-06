<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TaxiStand extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TaxiStand";
    }

}
