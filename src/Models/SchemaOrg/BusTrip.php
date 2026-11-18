<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusTrip";
    }

    public static function fieldList() {
        $fields = [
            "arrivalBusStop" => "arrivalBusStop",
            "busName" => "busName",
            "busNumber" => "busNumber",
            "departureBusStop" => "departureBusStop",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The stop or station from which the bus arrives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string
     */
    protected $arrivalBusStop;

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     *
     * @var string
     */
    protected $busName;

    /**
     * The unique identifier for the bus.
     *
     *
     * @var string
     */
    protected $busNumber;

    /**
     * The stop or station from which the bus departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string
     */
    protected $departureBusStop;

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string
     */
    public function getArrivalBusStop()
    {
        return $this->arrivalBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string $arrivalBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalBusStop($arrivalBusStop)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BusStation",
            "\OpenActive\Models\SchemaOrg\BusStop",
            "string",
        ];

        $arrivalBusStop = self::checkTypes($arrivalBusStop, $types);

        $this->arrivalBusStop = $arrivalBusStop;
    }

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
        $types = [
            "string",
        ];

        $busName = self::checkTypes($busName, $types);

        $this->busName = $busName;
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
        $types = [
            "string",
        ];

        $busNumber = self::checkTypes($busNumber, $types);

        $this->busNumber = $busNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string
     */
    public function getDepartureBusStop()
    {
        return $this->departureBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop|string $departureBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureBusStop($departureBusStop)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BusStation",
            "\OpenActive\Models\SchemaOrg\BusStop",
            "string",
        ];

        $departureBusStop = self::checkTypes($departureBusStop, $types);

        $this->departureBusStop = $departureBusStop;
    }

}
