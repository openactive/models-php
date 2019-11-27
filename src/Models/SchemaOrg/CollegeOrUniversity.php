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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
