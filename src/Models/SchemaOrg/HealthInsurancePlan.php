<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthInsurancePlan extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthInsurancePlan";
    }

    public static function fieldList() {
        $fields = [
            "healthPlanDrugTier" => "healthPlanDrugTier",
            "healthPlanDrugOption" => "healthPlanDrugOption",
            "benefitsSummaryUrl" => "benefitsSummaryUrl",
            "contactPoint" => "contactPoint",
            "healthPlanId" => "healthPlanId",
            "healthPlanMarketingUrl" => "healthPlanMarketingUrl",
            "includesHealthPlanNetwork" => "includesHealthPlanNetwork",
            "usesHealthPlanIdStandard" => "usesHealthPlanIdStandard",
            "includesHealthPlanFormulary" => "includesHealthPlanFormulary",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     *
     * @var string
     */
    protected $healthPlanDrugTier;

    /**
     * TODO.
     *
     *
     * @var string
     */
    protected $healthPlanDrugOption;

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     *
     *
     * @var string
     */
    protected $benefitsSummaryUrl;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoint;

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     *
     *
     * @var string
     */
    protected $healthPlanId;

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     *
     *
     * @var string
     */
    protected $healthPlanMarketingUrl;

    /**
     * Networks covered by this plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HealthPlanNetwork
     */
    protected $includesHealthPlanNetwork;

    /**
     * The standard for interpreting thePlan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more details.
     *
     *
     * @var string
     */
    protected $usesHealthPlanIdStandard;

    /**
     * Formularies covered by this plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HealthPlanFormulary
     */
    protected $includesHealthPlanFormulary;

    /**
     * @return string
     */
    public function getHealthPlanDrugTier()
    {
        return $this->healthPlanDrugTier;
    }

    /**
     * @param string $healthPlanDrugTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanDrugTier($healthPlanDrugTier)
    {
        $types = [
            "string",
        ];

        $healthPlanDrugTier = self::checkTypes($healthPlanDrugTier, $types);

        $this->healthPlanDrugTier = $healthPlanDrugTier;
    }

    /**
     * @return string
     */
    public function getHealthPlanDrugOption()
    {
        return $this->healthPlanDrugOption;
    }

    /**
     * @param string $healthPlanDrugOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanDrugOption($healthPlanDrugOption)
    {
        $types = [
            "string",
        ];

        $healthPlanDrugOption = self::checkTypes($healthPlanDrugOption, $types);

        $this->healthPlanDrugOption = $healthPlanDrugOption;
    }

    /**
     * @return string
     */
    public function getBenefitsSummaryUrl()
    {
        return $this->benefitsSummaryUrl;
    }

    /**
     * @param string $benefitsSummaryUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBenefitsSummaryUrl($benefitsSummaryUrl)
    {
        $types = [
            "string",
        ];

        $benefitsSummaryUrl = self::checkTypes($benefitsSummaryUrl, $types);

        $this->benefitsSummaryUrl = $benefitsSummaryUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $contactPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
    }

    /**
     * @return string
     */
    public function getHealthPlanId()
    {
        return $this->healthPlanId;
    }

    /**
     * @param string $healthPlanId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanId($healthPlanId)
    {
        $types = [
            "string",
        ];

        $healthPlanId = self::checkTypes($healthPlanId, $types);

        $this->healthPlanId = $healthPlanId;
    }

    /**
     * @return string
     */
    public function getHealthPlanMarketingUrl()
    {
        return $this->healthPlanMarketingUrl;
    }

    /**
     * @param string $healthPlanMarketingUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanMarketingUrl($healthPlanMarketingUrl)
    {
        $types = [
            "string",
        ];

        $healthPlanMarketingUrl = self::checkTypes($healthPlanMarketingUrl, $types);

        $this->healthPlanMarketingUrl = $healthPlanMarketingUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HealthPlanNetwork
     */
    public function getIncludesHealthPlanNetwork()
    {
        return $this->includesHealthPlanNetwork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HealthPlanNetwork $includesHealthPlanNetwork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesHealthPlanNetwork($includesHealthPlanNetwork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HealthPlanNetwork",
        ];

        $includesHealthPlanNetwork = self::checkTypes($includesHealthPlanNetwork, $types);

        $this->includesHealthPlanNetwork = $includesHealthPlanNetwork;
    }

    /**
     * @return string
     */
    public function getUsesHealthPlanIdStandard()
    {
        return $this->usesHealthPlanIdStandard;
    }

    /**
     * @param string $usesHealthPlanIdStandard
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsesHealthPlanIdStandard($usesHealthPlanIdStandard)
    {
        $types = [
            "string",
        ];

        $usesHealthPlanIdStandard = self::checkTypes($usesHealthPlanIdStandard, $types);

        $this->usesHealthPlanIdStandard = $usesHealthPlanIdStandard;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HealthPlanFormulary
     */
    public function getIncludesHealthPlanFormulary()
    {
        return $this->includesHealthPlanFormulary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HealthPlanFormulary $includesHealthPlanFormulary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesHealthPlanFormulary($includesHealthPlanFormulary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HealthPlanFormulary",
        ];

        $includesHealthPlanFormulary = self::checkTypes($includesHealthPlanFormulary, $types);

        $this->includesHealthPlanFormulary = $includesHealthPlanFormulary;
    }

}
