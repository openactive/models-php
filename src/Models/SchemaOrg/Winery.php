<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Winery extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Winery";
    }

}
