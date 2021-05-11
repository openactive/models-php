<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalTrialDesign extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalTrialDesign";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
