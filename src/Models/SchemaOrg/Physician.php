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
    public static function getType()
    {
        return "schema:Physician";
    }

}
