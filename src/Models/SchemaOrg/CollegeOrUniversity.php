<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CollegeOrUniversity extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CollegeOrUniversity";
    }

}
