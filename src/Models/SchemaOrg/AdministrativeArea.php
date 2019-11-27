<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AdministrativeArea extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AdministrativeArea";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
