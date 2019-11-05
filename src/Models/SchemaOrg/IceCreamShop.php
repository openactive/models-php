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
    static public function getType()
    {
        return "schema:IceCreamShop";
    }

}
