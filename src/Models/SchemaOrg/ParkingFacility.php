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
    public static function getType()
    {
        return "schema:ParkingFacility";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
