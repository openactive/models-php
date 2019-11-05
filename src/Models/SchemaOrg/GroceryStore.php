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
    static public function getType()
    {
        return "schema:GroceryStore";
    }

}
