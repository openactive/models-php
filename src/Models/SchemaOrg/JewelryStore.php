<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class JewelryStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:JewelryStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
