<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EmploymentAgency extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EmploymentAgency";
    }

}
