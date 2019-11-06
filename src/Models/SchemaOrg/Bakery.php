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

}
