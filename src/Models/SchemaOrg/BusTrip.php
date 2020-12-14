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
            "departureBusStop" => "departureBusStop",
            "arrivalBusStop" => "arrivalBusStop",
            "busNumber" => "busNumber",
            "busName" => "busName",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The stop or station from which the bus departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop
     */
    protected $departureBusStop;

    /**
     * The stop or station from which the bus arrives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation
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
     * The name of the bus (e.g. Bolt Express).
     *
     *
     * @var string
     */
    protected $busName;

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop
     */
    public function getDepartureBusStop()
    {
        return $this->departureBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStation|\OpenActive\Models\SchemaOrg\BusStop $departureBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureBusStop($departureBusStop)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BusStation",
            "\OpenActive\Models\SchemaOrg\BusStop",
        ];

        $departureBusStop = self::checkTypes($departureBusStop, $types);

        $this->departureBusStop = $departureBusStop;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation
     */
    public function getArrivalBusStop()
    {
        return $this->arrivalBusStop;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BusStop|\OpenActive\Models\SchemaOrg\BusStation $arrivalBusStop
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalBusStop($arrivalBusStop)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BusStop",
            "\OpenActive\Models\SchemaOrg\BusStation",
        ];

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
        $types = [
            "string",
        ];

        $busNumber = self::checkTypes($busNumber, $types);

        $this->busNumber = $busNumber;
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

}
