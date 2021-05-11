<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PhysicalTherapy extends \OpenActive\Models\SchemaOrg\MedicalTherapy
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PhysicalTherapy";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
