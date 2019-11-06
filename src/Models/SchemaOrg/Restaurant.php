<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Restaurant extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Restaurant";
    }

}
