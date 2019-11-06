<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGameClip extends \OpenActive\Models\SchemaOrg\Clip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoGameClip";
    }

}
