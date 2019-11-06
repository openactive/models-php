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
    public static function getType()
    {
        return "schema:SportsClub";
    }

}
