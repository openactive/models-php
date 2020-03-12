<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Flight extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Flight";
    }

    public static function fieldList() {
        $fields = [
            "arrivalAirport" => "arrivalAirport",
            "arrivalGate" => "arrivalGate",
            "carrier" => "carrier",
            "departureAirport" => "departureAirport",
            "boardingPolicy" => "boardingPolicy",
            "aircraft" => "aircraft",
            "webCheckinTime" => "webCheckinTime",
            "seller" => "seller",
            "mealService" => "mealService",
            "departureGate" => "departureGate",
            "departureTerminal" => "departureTerminal",
            "estimatedFlightDuration" => "estimatedFlightDuration",
            "flightDistance" => "flightDistance",
            "arrivalTerminal" => "arrivalTerminal",
            "flightNumber" => "flightNumber",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The airport where the flight terminates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $arrivalAirport;

    /**
     * Identifier of the flight's arrival gate.
     *
     *
     * @var string
     */
    protected $arrivalGate;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $carrier;

    /**
     * The airport where the flight originates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $departureAirport;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    protected $boardingPolicy;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vehicle|string
     */
    protected $aircraft;

    /**
     * The time when a passenger can check into the flight online.
     *
     *
     * @var null|DateTime
     */
    protected $webCheckinTime;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $seller;

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     *
     * @var string
     */
    protected $mealService;

    /**
     * Identifier of the flight's departure gate.
     *
     *
     * @var string
     */
    protected $departureGate;

    /**
     * Identifier of the flight's departure terminal.
     *
     *
     * @var string
     */
    protected $departureTerminal;

    /**
     * The estimated time the flight will take.
     *
     *
     * @var null|string|DateInterval
     */
    protected $estimatedFlightDuration;

    /**
     * The distance of the flight.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $flightDistance;

    /**
     * Identifier of the flight's arrival terminal.
     *
     *
     * @var string
     */
    protected $arrivalTerminal;

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     *
     *
     * @var string
     */
    protected $flightNumber;

    /**
     * @return \OpenActive\Models\SchemaOrg\Airport
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Airport $arrivalAirport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalAirport($arrivalAirport)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Airport",
        );

        $arrivalAirport = self::checkTypes($arrivalAirport, $types);

        $this->arrivalAirport = $arrivalAirport;
    }

    /**
     * @return string
     */
    public function getArrivalGate()
    {
        return $this->arrivalGate;
    }

    /**
     * @param string $arrivalGate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalGate($arrivalGate)
    {
        $types = array(
            "string",
        );

        $arrivalGate = self::checkTypes($arrivalGate, $types);

        $this->arrivalGate = $arrivalGate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $carrier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarrier($carrier)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Airport
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Airport $departureAirport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureAirport($departureAirport)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Airport",
        );

        $departureAirport = self::checkTypes($departureAirport, $types);

        $this->departureAirport = $departureAirport;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null $boardingPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBoardingPolicy($boardingPolicy)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\BoardingPolicyType",
            "null",
        );

        $boardingPolicy = self::checkTypes($boardingPolicy, $types);

        $this->boardingPolicy = $boardingPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vehicle|string
     */
    public function getAircraft()
    {
        return $this->aircraft;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vehicle|string $aircraft
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAircraft($aircraft)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Vehicle",
            "string",
        );

        $aircraft = self::checkTypes($aircraft, $types);

        $this->aircraft = $aircraft;
    }

    /**
     * @return null|DateTime
     */
    public function getWebCheckinTime()
    {
        return $this->webCheckinTime;
    }

    /**
     * @param null|DateTime $webCheckinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebCheckinTime($webCheckinTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $webCheckinTime = self::checkTypes($webCheckinTime, $types);

        $this->webCheckinTime = $webCheckinTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return string
     */
    public function getMealService()
    {
        return $this->mealService;
    }

    /**
     * @param string $mealService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMealService($mealService)
    {
        $types = array(
            "string",
        );

        $mealService = self::checkTypes($mealService, $types);

        $this->mealService = $mealService;
    }

    /**
     * @return string
     */
    public function getDepartureGate()
    {
        return $this->departureGate;
    }

    /**
     * @param string $departureGate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureGate($departureGate)
    {
        $types = array(
            "string",
        );

        $departureGate = self::checkTypes($departureGate, $types);

        $this->departureGate = $departureGate;
    }

    /**
     * @return string
     */
    public function getDepartureTerminal()
    {
        return $this->departureTerminal;
    }

    /**
     * @param string $departureTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureTerminal($departureTerminal)
    {
        $types = array(
            "string",
        );

        $departureTerminal = self::checkTypes($departureTerminal, $types);

        $this->departureTerminal = $departureTerminal;
    }

    /**
     * @return null|string|DateInterval
     */
    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }

    /**
     * @param null|string|DateInterval $estimatedFlightDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedFlightDuration($estimatedFlightDuration)
    {
        $types = array(
            "null",
            "string",
            "DateInterval",
        );

        $estimatedFlightDuration = self::checkTypes($estimatedFlightDuration, $types);

        $this->estimatedFlightDuration = $estimatedFlightDuration;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getFlightDistance()
    {
        return $this->flightDistance;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Distance $flightDistance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFlightDistance($flightDistance)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $flightDistance = self::checkTypes($flightDistance, $types);

        $this->flightDistance = $flightDistance;
    }

    /**
     * @return string
     */
    public function getArrivalTerminal()
    {
        return $this->arrivalTerminal;
    }

    /**
     * @param string $arrivalTerminal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalTerminal($arrivalTerminal)
    {
        $types = array(
            "string",
        );

        $arrivalTerminal = self::checkTypes($arrivalTerminal, $types);

        $this->arrivalTerminal = $arrivalTerminal;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param string $flightNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFlightNumber($flightNumber)
    {
        $types = array(
            "string",
        );

        $flightNumber = self::checkTypes($flightNumber, $types);

        $this->flightNumber = $flightNumber;
    }

}
