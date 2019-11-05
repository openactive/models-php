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
    static public function getType()
    {
        return "schema:VideoGameClip";
    }

}
