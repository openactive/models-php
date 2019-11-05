<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicVenue extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:MusicVenue";
    }

}
