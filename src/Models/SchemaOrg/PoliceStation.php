<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PoliceStation extends \OpenActive\Models\SchemaOrg\EmergencyService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PoliceStation";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
