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
    static public function getType()
    {
        return "schema:HighSchool";
    }

}
