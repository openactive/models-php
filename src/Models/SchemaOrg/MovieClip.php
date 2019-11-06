<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieClip extends \OpenActive\Models\SchemaOrg\Clip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MovieClip";
    }

}
