<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Brewery extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Brewery";
    }

}
