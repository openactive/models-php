<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TrainTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TrainTrip";
    }

    public static function fieldList() {
        $fields = [
            "arrivalStation" => "arrivalStation",
            "departurePlatform" => "departurePlatform",
            "trainNumber" => "trainNumber",
            "arrivalPlatform" => "arrivalPlatform",
            "trainName" => "trainName",
            "departureStation" => "departureStation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The station where the train trip ends.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TrainStation|string
     */
    protected $arrivalStation;

    /**
     * The platform from which the train departs.
     *
     *
     * @var string
     */
    protected $departurePlatform;

    /**
     * The unique identifier for the train.
     *
     *
     * @var string
     */
    protected $trainNumber;

    /**
     * The platform where the train arrives.
     *
     *
     * @var string
     */
    protected $arrivalPlatform;

    /**
     * The name of the train (e.g. The Orient Express).
     *
     *
     * @var string
     */
    protected $trainName;

    /**
     * The station from which the train departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TrainStation|string
     */
    protected $departureStation;

    /**
     * @return \OpenActive\Models\SchemaOrg\TrainStation|string
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TrainStation|string $arrivalStation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalStation($arrivalStation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TrainStation",
            "string",
        ];

        $arrivalStation = self::checkTypes($arrivalStation, $types);

        $this->arrivalStation = $arrivalStation;
    }

    /**
     * @return string
     */
    public function getDeparturePlatform()
    {
        return $this->departurePlatform;
    }

    /**
     * @param string $departurePlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeparturePlatform($departurePlatform)
    {
        $types = [
            "string",
        ];

        $departurePlatform = self::checkTypes($departurePlatform, $types);

        $this->departurePlatform = $departurePlatform;
    }

    /**
     * @return string
     */
    public function getTrainNumber()
    {
        return $this->trainNumber;
    }

    /**
     * @param string $trainNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrainNumber($trainNumber)
    {
        $types = [
            "string",
        ];

        $trainNumber = self::checkTypes($trainNumber, $types);

        $this->trainNumber = $trainNumber;
    }

    /**
     * @return string
     */
    public function getArrivalPlatform()
    {
        return $this->arrivalPlatform;
    }

    /**
     * @param string $arrivalPlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalPlatform($arrivalPlatform)
    {
        $types = [
            "string",
        ];

        $arrivalPlatform = self::checkTypes($arrivalPlatform, $types);

        $this->arrivalPlatform = $arrivalPlatform;
    }

    /**
     * @return string
     */
    public function getTrainName()
    {
        return $this->trainName;
    }

    /**
     * @param string $trainName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrainName($trainName)
    {
        $types = [
            "string",
        ];

        $trainName = self::checkTypes($trainName, $types);

        $this->trainName = $trainName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TrainStation|string
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TrainStation|string $departureStation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureStation($departureStation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TrainStation",
            "string",
        ];

        $departureStation = self::checkTypes($departureStation, $types);

        $this->departureStation = $departureStation;
    }

}
