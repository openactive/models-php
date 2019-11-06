<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TaxiReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TaxiReservation";
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     *
     * @var DateTime|null
     */
    protected $pickupTime;

    /**
     * Number of people the reservation should accommodate.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $partySize;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     *
     * @var Place
     */
    protected $pickupLocation;

    /**
     * @return DateTime|null
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * @param DateTime|null $pickupTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupTime($pickupTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $pickupTime = self::checkTypes($pickupTime, $types);

        $this->pickupTime = $pickupTime;
    }

    /**
     * @return int|QuantitativeValue|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param int|QuantitativeValue|null $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = array(
            "int",
            "QuantitativeValue",
            "null",
        );

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

    /**
     * @return Place
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param Place $pickupLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = array(
            "Place",
        );

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
    }

}
