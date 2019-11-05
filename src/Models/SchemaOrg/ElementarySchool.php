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
    static public function getType()
    {
        return "schema:ElementarySchool";
    }

}
