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
    static public function getType()
    {
        return "schema:Preschool";
    }

}
