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
            "departureBoatTerminal" => "departureBoatTerminal",
            "arrivalBoatTerminal" => "arrivalBoatTerminal",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The terminal or port from which the boat departs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BoatTerminal
     */
    protected $departureBoatTerminal;

    /**
     * The terminal or port from which the boat arrives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BoatTerminal
     */
    protected $arrivalBoatTerminal;

    /**
     * @return \OpenActive\Models\SchemaOrg\BoatTerminal
     */
    public function getDepartureBoatTerminal()
    {
        return $this->departureBoatTerminal;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BoatTerminal $departureBoatTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureBoatTerminal($departureBoatTerminal)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BoatTerminal",
        ];

        $departureBoatTerminal = self::checkTypes($departureBoatTerminal, $types);

        $this->departureBoatTerminal = $departureBoatTerminal;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BoatTerminal
     */
    public function getArrivalBoatTerminal()
    {
        return $this->arrivalBoatTerminal;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BoatTerminal $arrivalBoatTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalBoatTerminal($arrivalBoatTerminal)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BoatTerminal",
        ];

        $arrivalBoatTerminal = self::checkTypes($arrivalBoatTerminal, $types);

        $this->arrivalBoatTerminal = $arrivalBoatTerminal;
    }

}
