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
    static public function getType()
    {
        return "schema:Dentist";
    }

}
