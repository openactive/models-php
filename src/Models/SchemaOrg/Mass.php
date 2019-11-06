<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Mass extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Mass";
    }

}
