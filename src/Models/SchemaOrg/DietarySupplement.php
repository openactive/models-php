<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DietarySupplement extends \OpenActive\Models\SchemaOrg\Substance
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DietarySupplement";
    }

    public static function fieldList() {
        $fields = [
            "safetyConsideration" => "safetyConsideration",
            "recommendedIntake" => "recommendedIntake",
            "targetPopulation" => "targetPopulation",
            "activeIngredient" => "activeIngredient",
            "proprietaryName" => "proprietaryName",
            "manufacturer" => "manufacturer",
            "maximumIntake" => "maximumIntake",
            "nonProprietaryName" => "nonProprietaryName",
            "mechanismOfAction" => "mechanismOfAction",
            "legalStatus" => "legalStatus",
            "isProprietary" => "isProprietary",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
     *
     *
     * @var string
     */
    protected $safetyConsideration;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\RecommendedDoseSchedule|string
     */
    protected $recommendedIntake;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     *
     * @var string
     */
    protected $targetPopulation;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     *
     * @var string
     */
    protected $activeIngredient;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     *
     * @var string
     */
    protected $proprietaryName;

    /**
     * The manufacturer of the product.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string
     */
    protected $maximumIntake;

    /**
     * The generic name of this drug or supplement.
     *
     *
     * @var string
     */
    protected $nonProprietaryName;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     *
     * @var string
     */
    protected $mechanismOfAction;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null
     */
    protected $legalStatus;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     *
     * @var bool|null
     */
    protected $isProprietary;

    /**
     * @return string
     */
    public function getSafetyConsideration()
    {
        return $this->safetyConsideration;
    }

    /**
     * @param string $safetyConsideration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSafetyConsideration($safetyConsideration)
    {
        $types = [
            "string",
        ];

        $safetyConsideration = self::checkTypes($safetyConsideration, $types);

        $this->safetyConsideration = $safetyConsideration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\RecommendedDoseSchedule|string
     */
    public function getRecommendedIntake()
    {
        return $this->recommendedIntake;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\RecommendedDoseSchedule|string $recommendedIntake
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecommendedIntake($recommendedIntake)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\RecommendedDoseSchedule",
            "string",
        ];

        $recommendedIntake = self::checkTypes($recommendedIntake, $types);

        $this->recommendedIntake = $recommendedIntake;
    }

    /**
     * @return string
     */
    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    /**
     * @param string $targetPopulation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetPopulation($targetPopulation)
    {
        $types = [
            "string",
        ];

        $targetPopulation = self::checkTypes($targetPopulation, $types);

        $this->targetPopulation = $targetPopulation;
    }

    /**
     * @return string
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * @param string $activeIngredient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActiveIngredient($activeIngredient)
    {
        $types = [
            "string",
        ];

        $activeIngredient = self::checkTypes($activeIngredient, $types);

        $this->activeIngredient = $activeIngredient;
    }

    /**
     * @return string
     */
    public function getProprietaryName()
    {
        return $this->proprietaryName;
    }

    /**
     * @param string $proprietaryName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProprietaryName($proprietaryName)
    {
        $types = [
            "string",
        ];

        $proprietaryName = self::checkTypes($proprietaryName, $types);

        $this->proprietaryName = $proprietaryName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $manufacturer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setManufacturer($manufacturer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $manufacturer = self::checkTypes($manufacturer, $types);

        $this->manufacturer = $manufacturer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string
     */
    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string $maximumIntake
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumIntake($maximumIntake)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MaximumDoseSchedule",
            "string",
        ];

        $maximumIntake = self::checkTypes($maximumIntake, $types);

        $this->maximumIntake = $maximumIntake;
    }

    /**
     * @return string
     */
    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    /**
     * @param string $nonProprietaryName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNonProprietaryName($nonProprietaryName)
    {
        $types = [
            "string",
        ];

        $nonProprietaryName = self::checkTypes($nonProprietaryName, $types);

        $this->nonProprietaryName = $nonProprietaryName;
    }

    /**
     * @return string
     */
    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    /**
     * @param string $mechanismOfAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMechanismOfAction($mechanismOfAction)
    {
        $types = [
            "string",
        ];

        $mechanismOfAction = self::checkTypes($mechanismOfAction, $types);

        $this->mechanismOfAction = $mechanismOfAction;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null $legalStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalStatus($legalStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MedicalEnumeration",
            "\OpenActive\Models\SchemaOrg\DrugLegalStatus",
            "string",
            "null",
        ];

        $legalStatus = self::checkTypes($legalStatus, $types);

        $this->legalStatus = $legalStatus;
    }

    /**
     * @return bool|null
     */
    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    /**
     * @param bool|null $isProprietary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsProprietary($isProprietary)
    {
        $types = [
            "bool",
            "null",
        ];

        $isProprietary = self::checkTypes($isProprietary, $types);

        $this->isProprietary = $isProprietary;
    }

}
