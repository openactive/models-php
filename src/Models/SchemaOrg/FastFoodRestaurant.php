<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FastFoodRestaurant extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:FastFoodRestaurant";
    }

}
