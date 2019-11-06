<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShoppingCenter extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShoppingCenter";
    }

}
