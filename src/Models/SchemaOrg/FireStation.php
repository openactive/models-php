<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FireStation extends \OpenActive\Models\SchemaOrg\EmergencyService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FireStation";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
