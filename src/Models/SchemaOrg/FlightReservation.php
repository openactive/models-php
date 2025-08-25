<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FlightReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FlightReservation";
    }

    public static function fieldList() {
        $fields = [
            "passengerPriorityStatus" => "passengerPriorityStatus",
            "passengerSequenceNumber" => "passengerSequenceNumber",
            "boardingGroup" => "boardingGroup",
            "securityScreening" => "securityScreening",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $passengerPriorityStatus;

    /**
     * The passenger's sequence number as assigned by the airline.
     *
     *
     * @var string
     */
    protected $passengerSequenceNumber;

    /**
     * The airline-specific indicator of boarding order / preference.
     *
     *
     * @var string
     */
    protected $boardingGroup;

    /**
     * The type of security screening the passenger is subject to.
     *
     *
     * @var string
     */
    protected $securityScreening;

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getPassengerPriorityStatus()
    {
        return $this->passengerPriorityStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $passengerPriorityStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPassengerPriorityStatus($passengerPriorityStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $passengerPriorityStatus = self::checkTypes($passengerPriorityStatus, $types);

        $this->passengerPriorityStatus = $passengerPriorityStatus;
    }

    /**
     * @return string
     */
    public function getPassengerSequenceNumber()
    {
        return $this->passengerSequenceNumber;
    }

    /**
     * @param string $passengerSequenceNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPassengerSequenceNumber($passengerSequenceNumber)
    {
        $types = [
            "string",
        ];

        $passengerSequenceNumber = self::checkTypes($passengerSequenceNumber, $types);

        $this->passengerSequenceNumber = $passengerSequenceNumber;
    }

    /**
     * @return string
     */
    public function getBoardingGroup()
    {
        return $this->boardingGroup;
    }

    /**
     * @param string $boardingGroup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBoardingGroup($boardingGroup)
    {
        $types = [
            "string",
        ];

        $boardingGroup = self::checkTypes($boardingGroup, $types);

        $this->boardingGroup = $boardingGroup;
    }

    /**
     * @return string
     */
    public function getSecurityScreening()
    {
        return $this->securityScreening;
    }

    /**
     * @param string $securityScreening
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSecurityScreening($securityScreening)
    {
        $types = [
            "string",
        ];

        $securityScreening = self::checkTypes($securityScreening, $types);

        $this->securityScreening = $securityScreening;
    }

}
