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
    static public function getType()
    {
        return "schema:Brewery";
    }

}
