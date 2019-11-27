<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class School extends \OpenActive\Models\SchemaOrg\EducationalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:School";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
