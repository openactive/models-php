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
    public static function getType()
    {
        return "schema:MiddleSchool";
    }

}
