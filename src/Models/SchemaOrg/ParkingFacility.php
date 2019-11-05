<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ParkingFacility extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ParkingFacility";
    }

}
