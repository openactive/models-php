<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugPrescriptionStatus extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugPrescriptionStatus";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
