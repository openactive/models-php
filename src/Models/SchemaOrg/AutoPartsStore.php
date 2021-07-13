<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoPartsStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutoPartsStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
