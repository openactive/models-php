<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Plumber extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Plumber";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
