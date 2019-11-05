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
    static public function getType()
    {
        return "schema:RadioEpisode";
    }

}
