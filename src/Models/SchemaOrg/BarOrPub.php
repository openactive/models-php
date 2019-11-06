<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BarOrPub extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BarOrPub";
    }

}
