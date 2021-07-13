<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BoatTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BoatTrip";
    }

    public static function fieldList() {
        $fields = [
            "arrivalBoatTerminal" => "arrivalBoatTerminal",
            "departureBoatTerminal" => "departureBoatTerminal",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The terminal or port from which the boat arrives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BoatTerminal|string
     */
    protected $arrivalBoatTerminal;

    /**
     * The terminal or port from which the boat departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BoatTerminal|string
     */
    protected $departureBoatTerminal;

    /**
     * @return \OpenActive\Models\SchemaOrg\BoatTerminal|string
     */
    public function getArrivalBoatTerminal()
    {
        return $this->arrivalBoatTerminal;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BoatTerminal|string $arrivalBoatTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalBoatTerminal($arrivalBoatTerminal)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BoatTerminal",
            "string",
        ];

        $arrivalBoatTerminal = self::checkTypes($arrivalBoatTerminal, $types);

        $this->arrivalBoatTerminal = $arrivalBoatTerminal;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BoatTerminal|string
     */
    public function getDepartureBoatTerminal()
    {
        return $this->departureBoatTerminal;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BoatTerminal|string $departureBoatTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureBoatTerminal($departureBoatTerminal)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BoatTerminal",
            "string",
        ];

        $departureBoatTerminal = self::checkTypes($departureBoatTerminal, $types);

        $this->departureBoatTerminal = $departureBoatTerminal;
    }

}
