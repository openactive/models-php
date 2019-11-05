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
    static public function getType()
    {
        return "schema:CollegeOrUniversity";
    }

}
