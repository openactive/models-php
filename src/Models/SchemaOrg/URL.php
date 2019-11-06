<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class URL extends \OpenActive\Models\SchemaOrg\Text
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:URL";
    }

}
