<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HighSchool extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HighSchool";
    }

}
