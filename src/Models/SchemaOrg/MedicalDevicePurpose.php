<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalDevicePurpose extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalDevicePurpose";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
