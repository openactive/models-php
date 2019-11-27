<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HobbyShop extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HobbyShop";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
