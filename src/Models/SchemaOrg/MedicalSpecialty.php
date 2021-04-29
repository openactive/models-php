<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalSpecialty extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalSpecialty";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
