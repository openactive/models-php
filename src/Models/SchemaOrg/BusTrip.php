<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * The name of the bus (e.g. Bolt Express).
     *
     *
     * @var string
     */
    protected $busName;

    /**
     * The stop or station from which the bus departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation
     */
    protected $departureBusStop;

    /**
     * The stop or station from which the bus arrives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop
     */
    protected $arrivalBusStop;

    /**
     * The unique identifier for the bus.
     *
     *
     * @var string
     */
    protected $busNumber;

    /**
     * @return string
     */
    public function getBusName()
    {
        return $this->busName;
    }

    /**
     * @param string $busName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusName($busName)
    {
        $types = array(
            "string",
        );

        $busName = self::checkTypes($busName, $types);

        $this->busName = $busName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation
     */
    public function getDepartureBusStop()
    {
        return $this->departureBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation $departureBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureBusStop($departureBusStop)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BusStop",
            "\OpenActive\Models\SchemaOrg\BusStation",
        );

        $departureBusStop = self::checkTypes($departureBusStop, $types);

        $this->departureBusStop = $departureBusStop;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop
     */
    public function getArrivalBusStop()
    {
        return $this->arrivalBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop $arrivalBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalBusStop($arrivalBusStop)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BusStation",
            "\OpenActive\Models\SchemaOrg\BusStop",
        );

        $arrivalBusStop = self::checkTypes($arrivalBusStop, $types);

        $this->arrivalBusStop = $arrivalBusStop;
    }

    /**
     * @return string
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * @param string $busNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusNumber($busNumber)
    {
        $types = array(
            "string",
        );

        $busNumber = self::checkTypes($busNumber, $types);

        $this->busNumber = $busNumber;
    }

}
