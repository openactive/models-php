<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CampingPitch extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CampingPitch";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
