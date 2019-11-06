<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Float extends \OpenActive\Models\SchemaOrg\Number
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Float";
    }

}
