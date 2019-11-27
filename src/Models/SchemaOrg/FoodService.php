<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FoodService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FoodService";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
