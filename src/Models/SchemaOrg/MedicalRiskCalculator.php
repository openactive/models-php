<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalRiskCalculator extends \OpenActive\Models\SchemaOrg\MedicalRiskEstimator
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalRiskCalculator";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
