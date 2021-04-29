<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VitalSign extends \OpenActive\Models\SchemaOrg\MedicalSign
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VitalSign";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
