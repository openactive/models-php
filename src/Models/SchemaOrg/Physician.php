<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Physician extends \OpenActive\Models\SchemaOrg\MedicalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Physician";
    }

}
