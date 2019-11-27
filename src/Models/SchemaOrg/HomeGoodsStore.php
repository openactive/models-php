<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HomeGoodsStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HomeGoodsStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
