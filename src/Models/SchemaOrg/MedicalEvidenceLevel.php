<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalEvidenceLevel extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalEvidenceLevel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
