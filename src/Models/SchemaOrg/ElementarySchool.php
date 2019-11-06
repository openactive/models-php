<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ElementarySchool extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ElementarySchool";
    }

}
