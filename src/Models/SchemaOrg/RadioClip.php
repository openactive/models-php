<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioClip extends \OpenActive\Models\SchemaOrg\Clip
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:RadioClip";
    }

}
