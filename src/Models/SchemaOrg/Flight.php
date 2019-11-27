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
            "seller" => "seller",
            "departureAirport" => "departureAirport",
            "mealService" => "mealService",
            "arrivalAirport" => "arrivalAirport",
            "departureGate" => "departureGate",
            "flightNumber" => "flightNumber",
            "boardingPolicy" => "boardingPolicy",
            "arrivalTerminal" => "arrivalTerminal",
            "flightDistance" => "flightDistance",
            "estimatedFlightDuration" => "estimatedFlightDuration",
            "departureTerminal" => "departureTerminal",
            "aircraft" => "aircraft",
            "carrier" => "carrier",
            "arrivalGate" => "arrivalGate",
            "webCheckinTime" => "webCheckinTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $seller;

    /**
     * The airport where the flight originates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $departureAirport;

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     *
     * @var string
     */
    protected $mealService;

    /**
     * The airport where the flight terminates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $arrivalAirport;

    /**
     * Identifier of the flight's departure gate.
     *
     *
     * @var string
     */
    protected $departureGate;

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     *
     *
     * @var string
     */
    protected $flightNumber;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    protected $boardingPolicy;

    /**
     * Identifier of the flight's arrival terminal.
     *
     *
     * @var string
     */
    protected $arrivalTerminal;

    /**
     * The distance of the flight.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $flightDistance;

    /**
     * The estimated time the flight will take.
     *
     *
     * @var string|DateInterval|null
     */
    protected $estimatedFlightDuration;

    /**
     * Identifier of the flight's departure terminal.
     *
     *
     * @var string
     */
    protected $departureTerminal;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vehicle|string
     */
    protected $aircraft;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $carrier;

    /**
     * Identifier of the flight's arrival gate.
     *
     *
     * @var string
     */
    protected $arrivalGate;

    /**
     * The time when a passenger can check into the flight online.
     *
     *
     * @var DateTime|null
     */
    protected $webCheckinTime;

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
     * @return string|DateInterval|null
     */
    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }

    /**
     * @param string|DateInterval|null $estimatedFlightDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedFlightDuration($estimatedFlightDuration)
    {
        $types = array(
            "string",
            "DateInterval",
            "null",
        );

        $estimatedFlightDuration = self::checkTypes($estimatedFlightDuration, $types);

        $this->estimatedFlightDuration = $estimatedFlightDuration;
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
     * @return DateTime|null
     */
    public function getWebCheckinTime()
    {
        return $this->webCheckinTime;
    }

    /**
     * @param DateTime|null $webCheckinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebCheckinTime($webCheckinTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $webCheckinTime = self::checkTypes($webCheckinTime, $types);

        $this->webCheckinTime = $webCheckinTime;
    }

}
