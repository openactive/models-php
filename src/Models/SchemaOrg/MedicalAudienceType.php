<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalAudienceType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalAudienceType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
