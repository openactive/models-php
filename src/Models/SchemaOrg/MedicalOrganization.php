<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalOrganization";
    }

    public static function fieldList() {
        $fields = [
            "isAcceptingNewPatients" => "isAcceptingNewPatients",
            "healthPlanNetworkId" => "healthPlanNetworkId",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Whether the provider is accepting new patients.
     *
     *
     * @var null|bool
     */
    protected $isAcceptingNewPatients;

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
    public function getIsAcceptingNewPatients()
    {
        return $this->isAcceptingNewPatients;
    }

    /**
     * @param null|bool $isAcceptingNewPatients
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAcceptingNewPatients($isAcceptingNewPatients)
    {
        $types = array(
            "null",
            "bool",
        );

        $isAcceptingNewPatients = self::checkTypes($isAcceptingNewPatients, $types);

        $this->isAcceptingNewPatients = $isAcceptingNewPatients;
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
