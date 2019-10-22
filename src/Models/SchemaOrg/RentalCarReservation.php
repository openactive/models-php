<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class RentalCarReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * When a rental car can be dropped off.
     *
     *
     * @var DateTime|null
     */
    protected $dropoffTime;

    /**
     * Where a rental car can be dropped off.
     *
     *
     * @var Place
     */
    protected $dropoffLocation;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     *
     * @var Place
     */
    protected $pickupLocation;

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     *
     * @var DateTime|null
     */
    protected $pickupTime;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDropoffTime($dropoffTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $dropoffTime = self::checkTypes($dropoffTime, $types);

        $this->dropoffTime = $dropoffTime;
    }

    /**
     * @return Place
     */
    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    /**
     * @param Place $dropoffLocation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDropoffLocation($dropoffLocation)
    {
        $types = array(
            "Place",
        );

        $dropoffLocation = self::checkTypes($dropoffLocation, $types);

        $this->dropoffLocation = $dropoffLocation;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = array(
            "Place",
        );

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
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
     * @throws \Exception If the provided argument is not of a supported type.
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

}