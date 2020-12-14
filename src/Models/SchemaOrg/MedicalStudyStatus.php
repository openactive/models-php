<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalStudyStatus extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalStudyStatus";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
