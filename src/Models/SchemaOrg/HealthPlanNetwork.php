<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthPlanNetwork extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthPlanNetwork";
    }

    public static function fieldList() {
        $fields = [
            "healthPlanCostSharing" => "healthPlanCostSharing",
            "healthPlanNetworkTier" => "healthPlanNetworkTier",
            "healthPlanNetworkId" => "healthPlanNetworkId",
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
     * The tier(s) for this network.
     *
     *
     * @var string
     */
    protected $healthPlanNetworkTier;

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans).
     *
     *
     * @var string
     */
    protected $healthPlanNetworkId;

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
    public function getHealthPlanNetworkTier()
    {
        return $this->healthPlanNetworkTier;
    }

    /**
     * @param string $healthPlanNetworkTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanNetworkTier($healthPlanNetworkTier)
    {
        $types = array(
            "string",
        );

        $healthPlanNetworkTier = self::checkTypes($healthPlanNetworkTier, $types);

        $this->healthPlanNetworkTier = $healthPlanNetworkTier;
    }

    /**
     * @return string
     */
    public function getHealthPlanNetworkId()
    {
        return $this->healthPlanNetworkId;
    }

    /**
     * @param string $healthPlanNetworkId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanNetworkId($healthPlanNetworkId)
    {
        $types = array(
            "string",
        );

        $healthPlanNetworkId = self::checkTypes($healthPlanNetworkId, $types);

        $this->healthPlanNetworkId = $healthPlanNetworkId;
    }

}
