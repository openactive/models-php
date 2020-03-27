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
            "healthPlanCostSharing" => "healthPlanCostSharing",
            "healthPlanDrugTier" => "healthPlanDrugTier",
            "offersPrescriptionByMail" => "offersPrescriptionByMail",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Whether The costs to the patient for services under this network or formulary.
     *
     *
     * @var null|bool
     */
    protected $healthPlanCostSharing;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     *
     * @var string
     */
    protected $healthPlanDrugTier;

    /**
     * Whether prescriptions can be delivered by mail.
     *
     *
     * @var null|bool
     */
    protected $offersPrescriptionByMail;

    /**
     * @return null|bool
     */
    public function getHealthPlanCostSharing()
    {
        return $this->healthPlanCostSharing;
    }

    /**
     * @param null|bool $healthPlanCostSharing
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCostSharing($healthPlanCostSharing)
    {
        $types = array(
            "null",
            "bool",
        );

        $healthPlanCostSharing = self::checkTypes($healthPlanCostSharing, $types);

        $this->healthPlanCostSharing = $healthPlanCostSharing;
    }

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
        $types = array(
            "string",
        );

        $healthPlanDrugTier = self::checkTypes($healthPlanDrugTier, $types);

        $this->healthPlanDrugTier = $healthPlanDrugTier;
    }

    /**
     * @return null|bool
     */
    public function getOffersPrescriptionByMail()
    {
        return $this->offersPrescriptionByMail;
    }

    /**
     * @param null|bool $offersPrescriptionByMail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffersPrescriptionByMail($offersPrescriptionByMail)
    {
        $types = array(
            "null",
            "bool",
        );

        $offersPrescriptionByMail = self::checkTypes($offersPrescriptionByMail, $types);

        $this->offersPrescriptionByMail = $offersPrescriptionByMail;
    }

}
