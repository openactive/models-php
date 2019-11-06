<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hospital extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Hospital";
    }

}
