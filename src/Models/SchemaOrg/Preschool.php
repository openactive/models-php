<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Preschool extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Preschool";
    }

}
