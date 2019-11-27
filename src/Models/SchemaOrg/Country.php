<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Country extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Country";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
