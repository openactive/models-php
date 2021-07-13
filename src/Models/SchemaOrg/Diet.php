<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Diet extends \OpenActive\Models\SchemaOrg\LifestyleModification
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
            "risks" => "risks",
            "endorsers" => "endorsers",
            "expertConsiderations" => "expertConsiderations",
            "physiologicalBenefits" => "physiologicalBenefits",
            "dietFeatures" => "dietFeatures",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specific physiologic risks associated to the diet plan.
     *
     *
     * @var string
     */
    protected $risks;

    /**
     * People or organizations that endorse the plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $endorsers;

    /**
     * Medical expert advice related to the plan.
     *
     *
     * @var string
     */
    protected $expertConsiderations;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     *
     * @var string
     */
    protected $physiologicalBenefits;

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     *
     *
     * @var string
     */
    protected $dietFeatures;

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

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getEndorsers()
    {
        return $this->endorsers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $endorsers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndorsers($endorsers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $endorsers = self::checkTypes($endorsers, $types);

        $this->endorsers = $endorsers;
    }

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

}
