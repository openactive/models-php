<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Airline extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Airline";
    }

    public static function fieldList() {
        $fields = [
            "boardingPolicy" => "boardingPolicy",
            "iataCode" => "iataCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    protected $boardingPolicy;

    /**
     * IATA identifier for an airline or airport.
     *
     *
     * @var string
     */
    protected $iataCode;

    /**
     * @return \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null $boardingPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBoardingPolicy($boardingPolicy)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\BoardingPolicyType",
            "null",
        ];

        $boardingPolicy = self::checkTypes($boardingPolicy, $types);

        $this->boardingPolicy = $boardingPolicy;
    }

    /**
     * @return string
     */
    public function getIataCode()
    {
        return $this->iataCode;
    }

    /**
     * @param string $iataCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIataCode($iataCode)
    {
        $types = [
            "string",
        ];

        $iataCode = self::checkTypes($iataCode, $types);

        $this->iataCode = $iataCode;
    }

}
