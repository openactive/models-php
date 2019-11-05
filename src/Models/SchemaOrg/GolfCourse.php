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
    static public function getType()
    {
        return "schema:GolfCourse";
    }

}
