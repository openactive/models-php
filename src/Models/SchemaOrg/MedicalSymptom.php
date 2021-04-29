<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalSymptom extends \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalSymptom";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
