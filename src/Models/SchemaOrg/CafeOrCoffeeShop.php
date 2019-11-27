<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CafeOrCoffeeShop extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CafeOrCoffeeShop";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
