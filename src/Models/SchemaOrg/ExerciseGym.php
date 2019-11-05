<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExerciseGym extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ExerciseGym";
    }

}
