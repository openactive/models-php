<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FoodEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FoodEvent";
    }

}
