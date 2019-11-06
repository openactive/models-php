<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Duration extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Duration";
    }

}
