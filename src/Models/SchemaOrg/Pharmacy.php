<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Pharmacy extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Pharmacy";
    }

}
