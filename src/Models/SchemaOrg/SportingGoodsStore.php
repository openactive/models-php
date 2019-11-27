<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SportingGoodsStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportingGoodsStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
