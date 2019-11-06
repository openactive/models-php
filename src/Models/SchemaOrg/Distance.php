<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Distance extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Distance";
    }

}
