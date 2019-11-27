<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LandmarksOrHistoricalBuildings extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LandmarksOrHistoricalBuildings";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
