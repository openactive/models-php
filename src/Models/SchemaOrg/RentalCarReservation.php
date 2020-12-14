<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RentalCarReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RentalCarReservation";
    }

    public static function fieldList() {
        $fields = [
            "dropoffLocation" => "dropoffLocation",
            "pickupTime" => "pickupTime",
            "pickupLocation" => "pickupLocation",
            "dropoffTime" => "dropoffTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Where a rental car can be dropped off.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $dropoffLocation;

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
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $pickupLocation;

    /**
     * When a rental car can be dropped off.
     *
     *
     * @var DateTime|null
     */
    protected $dropoffTime;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $dropoffLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDropoffLocation($dropoffLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $dropoffLocation = self::checkTypes($dropoffLocation, $types);

        $this->dropoffLocation = $dropoffLocation;
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
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $pickupLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
    }

    /**
     * @return DateTime|null
     */
    public function getDropoffTime()
    {
        return $this->dropoffTime;
    }

    /**
     * @param DateTime|null $dropoffTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDropoffTime($dropoffTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $dropoffTime = self::checkTypes($dropoffTime, $types);

        $this->dropoffTime = $dropoffTime;
    }

}
