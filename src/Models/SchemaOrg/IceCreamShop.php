<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class IceCreamShop extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:IceCreamShop";
    }

}
