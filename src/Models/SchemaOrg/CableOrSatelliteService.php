<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CableOrSatelliteService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CableOrSatelliteService";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
