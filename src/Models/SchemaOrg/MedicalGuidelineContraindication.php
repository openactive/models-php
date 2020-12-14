<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalGuidelineContraindication extends \OpenActive\Models\SchemaOrg\MedicalGuideline
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalGuidelineContraindication";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
