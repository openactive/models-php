<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalProcedureType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalProcedureType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
