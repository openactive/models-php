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

}
