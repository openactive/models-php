<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GolfCourse extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GolfCourse";
    }

}
