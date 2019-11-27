<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CityHall extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CityHall";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
