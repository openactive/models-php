<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ElectronicsStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ElectronicsStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
