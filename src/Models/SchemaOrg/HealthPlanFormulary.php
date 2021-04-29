<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthPlanFormulary extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthPlanFormulary";
    }

    public static function fieldList() {
        $fields = [
            "healthPlanDrugTier" => "healthPlanDrugTier",
            "healthPlanCostSharing" => "healthPlanCostSharing",
            "offersPrescriptionByMail" => "offersPrescriptionByMail",
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
     * Whether The costs to the patient for services under this network or formulary.
     *
     *
     * @var bool|null
     */
    protected $healthPlanCostSharing;

    /**
     * Whether prescriptions can be delivered by mail.
     *
     *
     * @var bool|null
     */
    protected $offersPrescriptionByMail;

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
     * @return bool|null
     */
    public function getHealthPlanCostSharing()
    {
        return $this->healthPlanCostSharing;
    }

    /**
     * @param bool|null $healthPlanCostSharing
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCostSharing($healthPlanCostSharing)
    {
        $types = [
            "bool",
            "null",
        ];

        $healthPlanCostSharing = self::checkTypes($healthPlanCostSharing, $types);

        $this->healthPlanCostSharing = $healthPlanCostSharing;
    }

    /**
     * @return bool|null
     */
    public function getOffersPrescriptionByMail()
    {
        return $this->offersPrescriptionByMail;
    }

    /**
     * @param bool|null $offersPrescriptionByMail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffersPrescriptionByMail($offersPrescriptionByMail)
    {
        $types = [
            "bool",
            "null",
        ];

        $offersPrescriptionByMail = self::checkTypes($offersPrescriptionByMail, $types);

        $this->offersPrescriptionByMail = $offersPrescriptionByMail;
    }

}
