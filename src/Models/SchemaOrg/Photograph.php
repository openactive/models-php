<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Photograph extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Photograph";
    }

}
