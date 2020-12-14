<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalRiskEstimator extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalRiskEstimator";
    }

    public static function fieldList() {
        $fields = [
            "estimatesRiskOf" => "estimatesRiskOf",
            "includedRiskFactor" => "includedRiskFactor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $estimatesRiskOf;

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalRiskFactor
     */
    protected $includedRiskFactor;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getEstimatesRiskOf()
    {
        return $this->estimatesRiskOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity $estimatesRiskOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatesRiskOf($estimatesRiskOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $estimatesRiskOf = self::checkTypes($estimatesRiskOf, $types);

        $this->estimatesRiskOf = $estimatesRiskOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalRiskFactor
     */
    public function getIncludedRiskFactor()
    {
        return $this->includedRiskFactor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalRiskFactor $includedRiskFactor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedRiskFactor($includedRiskFactor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalRiskFactor",
        ];

        $includedRiskFactor = self::checkTypes($includedRiskFactor, $types);

        $this->includedRiskFactor = $includedRiskFactor;
    }

}
