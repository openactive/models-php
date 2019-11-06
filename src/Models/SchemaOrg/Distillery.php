<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Distillery extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Distillery";
    }

}
