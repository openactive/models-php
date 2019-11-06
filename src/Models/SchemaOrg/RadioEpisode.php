<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioEpisode extends \OpenActive\Models\SchemaOrg\Episode
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioEpisode";
    }

}
