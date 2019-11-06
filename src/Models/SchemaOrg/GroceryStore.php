<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GroceryStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GroceryStore";
    }

}
