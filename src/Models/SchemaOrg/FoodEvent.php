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
    static public function getType()
    {
        return "schema:FoodEvent";
    }

}
