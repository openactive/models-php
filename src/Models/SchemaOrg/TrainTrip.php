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

    /**
     * The station from which the train departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TrainStation
     */
    protected $departureStation;

    /**
     * The platform where the train arrives.
     *
     *
     * @var string
     */
    protected $arrivalPlatform;

    /**
     * The platform from which the train departs.
     *
     *
     * @var string
     */
    protected $departurePlatform;

    /**
     * The name of the train (e.g. The Orient Express).
     *
     *
     * @var string
     */
    protected $trainName;

    /**
     * The unique identifier for the train.
     *
     *
     * @var string
     */
    protected $trainNumber;

    /**
     * The station where the train trip ends.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TrainStation
     */
    protected $arrivalStation;

    /**
     * @return \OpenActive\Models\SchemaOrg\TrainStation
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TrainStation $departureStation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureStation($departureStation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\TrainStation",
        );

        $departureStation = self::checkTypes($departureStation, $types);

        $this->departureStation = $departureStation;
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
        $types = array(
            "string",
        );

        $arrivalPlatform = self::checkTypes($arrivalPlatform, $types);

        $this->arrivalPlatform = $arrivalPlatform;
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
        $types = array(
            "string",
        );

        $departurePlatform = self::checkTypes($departurePlatform, $types);

        $this->departurePlatform = $departurePlatform;
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
        $types = array(
            "string",
        );

        $trainName = self::checkTypes($trainName, $types);

        $this->trainName = $trainName;
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
        $types = array(
            "string",
        );

        $trainNumber = self::checkTypes($trainNumber, $types);

        $this->trainNumber = $trainNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TrainStation
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TrainStation $arrivalStation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalStation($arrivalStation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\TrainStation",
        );

        $arrivalStation = self::checkTypes($arrivalStation, $types);

        $this->arrivalStation = $arrivalStation;
    }

}
