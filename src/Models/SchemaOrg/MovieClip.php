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
    static public function getType()
    {
        return "schema:MovieClip";
    }

}
