<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Integer extends \OpenActive\Models\SchemaOrg\Number
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Integer";
    }

}
