<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Dentist extends \OpenActive\Models\SchemaOrg\MedicalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Dentist";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
