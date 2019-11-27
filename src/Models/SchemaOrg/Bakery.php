<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Bakery extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Bakery";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
