<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MiddleSchool extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:MiddleSchool";
    }

}
