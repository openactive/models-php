<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Diet extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Diet";
    }

    public static function fieldList() {
        $fields = [
            "expertConsiderations" => "expertConsiderations",
            "endorsers" => "endorsers",
            "dietFeatures" => "dietFeatures",
            "physiologicalBenefits" => "physiologicalBenefits",
            "risks" => "risks",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Medical expert advice related to the plan.
     *
     *
     * @var string
     */
    protected $expertConsiderations;

    /**
     * People or organizations that endorse the plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $endorsers;

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     *
     *
     * @var string
     */
    protected $dietFeatures;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     *
     * @var string
     */
    protected $physiologicalBenefits;

    /**
     * Specific physiologic risks associated to the diet plan.
     *
     *
     * @var string
     */
    protected $risks;

    /**
     * @return string
     */
    public function getExpertConsiderations()
    {
        return $this->expertConsiderations;
    }

    /**
     * @param string $expertConsiderations
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpertConsiderations($expertConsiderations)
    {
        $types = [
            "string",
        ];

        $expertConsiderations = self::checkTypes($expertConsiderations, $types);

        $this->expertConsiderations = $expertConsiderations;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getEndorsers()
    {
        return $this->endorsers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $endorsers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndorsers($endorsers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $endorsers = self::checkTypes($endorsers, $types);

        $this->endorsers = $endorsers;
    }

    /**
     * @return string
     */
    public function getDietFeatures()
    {
        return $this->dietFeatures;
    }

    /**
     * @param string $dietFeatures
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDietFeatures($dietFeatures)
    {
        $types = [
            "string",
        ];

        $dietFeatures = self::checkTypes($dietFeatures, $types);

        $this->dietFeatures = $dietFeatures;
    }

    /**
     * @return string
     */
    public function getPhysiologicalBenefits()
    {
        return $this->physiologicalBenefits;
    }

    /**
     * @param string $physiologicalBenefits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhysiologicalBenefits($physiologicalBenefits)
    {
        $types = [
            "string",
        ];

        $physiologicalBenefits = self::checkTypes($physiologicalBenefits, $types);

        $this->physiologicalBenefits = $physiologicalBenefits;
    }

    /**
     * @return string
     */
    public function getRisks()
    {
        return $this->risks;
    }

    /**
     * @param string $risks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRisks($risks)
    {
        $types = [
            "string",
        ];

        $risks = self::checkTypes($risks, $types);

        $this->risks = $risks;
    }

}
