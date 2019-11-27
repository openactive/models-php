<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class City extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:City";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
