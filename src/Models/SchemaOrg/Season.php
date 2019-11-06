<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Season extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Season";
    }

}
