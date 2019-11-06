<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Code extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Code";
    }

}
