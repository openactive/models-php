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
    static public function getType()
    {
        return "schema:CafeOrCoffeeShop";
    }

}
