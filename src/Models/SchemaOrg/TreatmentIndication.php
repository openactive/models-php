<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TreatmentIndication extends \OpenActive\Models\SchemaOrg\MedicalIndication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TreatmentIndication";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
