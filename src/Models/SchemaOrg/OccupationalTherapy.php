<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OccupationalTherapy extends \OpenActive\Models\SchemaOrg\MedicalTherapy
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OccupationalTherapy";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
