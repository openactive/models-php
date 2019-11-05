<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SportsClub extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:SportsClub";
    }

}
