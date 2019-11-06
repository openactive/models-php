<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Painting extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Painting";
    }

}
