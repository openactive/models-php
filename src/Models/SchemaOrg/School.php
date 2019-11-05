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
    static public function getType()
    {
        return "schema:School";
    }

}
