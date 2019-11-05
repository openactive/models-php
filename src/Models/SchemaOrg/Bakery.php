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
    static public function getType()
    {
        return "schema:Bakery";
    }

}
