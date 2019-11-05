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
    static public function getType()
    {
        return "schema:Pharmacy";
    }

}
