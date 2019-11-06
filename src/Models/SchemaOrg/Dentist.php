<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Dentist extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Dentist";
    }

}
