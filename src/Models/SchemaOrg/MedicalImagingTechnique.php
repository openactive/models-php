<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalImagingTechnique extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalImagingTechnique";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
