<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Airline extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * IATA identifier for an airline or airport.
     *
     *
     * @var string
     */
    protected $iataCode;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var Schema.NET.BoardingPolicyType|null
     */
    protected $boardingPolicy;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIataCode($iataCode)
    {
        $types = array(
            "string",
        );

        $iataCode = self::checkTypes($iataCode, $types);

        $this->iataCode = $iataCode;
    }

    /**
     * @return Schema.NET.BoardingPolicyType|null
     */
    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    /**
     * @param Schema.NET.BoardingPolicyType|null $boardingPolicy
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBoardingPolicy($boardingPolicy)
    {
        $types = array(
            "Schema.NET.BoardingPolicyType",
            "null",
        );

        $boardingPolicy = self::checkTypes($boardingPolicy, $types);

        $this->boardingPolicy = $boardingPolicy;
    }

}
