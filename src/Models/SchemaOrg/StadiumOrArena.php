<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StadiumOrArena extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:StadiumOrArena";
    }

}
