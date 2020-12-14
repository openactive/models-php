<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Optician extends \OpenActive\Models\SchemaOrg\MedicalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Optician";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
