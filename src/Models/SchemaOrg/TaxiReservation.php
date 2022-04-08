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

    public static function fieldList() {
        $fields = [
            "partySize" => "partySize",
            "pickupTime" => "pickupTime",
            "pickupLocation" => "pickupLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Number of people the reservation should accommodate.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $partySize;

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     *
     * @var DateTime|null
     */
    protected $pickupTime;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $pickupLocation;

    /**
     * @return int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = [
            "int",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

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
        $types = [
            "DateTime",
            "null",
        ];

        $pickupTime = self::checkTypes($pickupTime, $types);

        $this->pickupTime = $pickupTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $pickupLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
    }

}
