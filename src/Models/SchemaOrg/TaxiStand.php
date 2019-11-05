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
    static public function getType()
    {
        return "schema:TaxiStand";
    }

}
