<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SchoolDistrict extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SchoolDistrict";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
