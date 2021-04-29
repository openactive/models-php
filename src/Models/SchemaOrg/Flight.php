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
            "webCheckinTime" => "webCheckinTime",
            "departureGate" => "departureGate",
            "seller" => "seller",
            "mealService" => "mealService",
            "aircraft" => "aircraft",
            "arrivalTerminal" => "arrivalTerminal",
            "departureAirport" => "departureAirport",
            "arrivalGate" => "arrivalGate",
            "departureTerminal" => "departureTerminal",
            "arrivalAirport" => "arrivalAirport",
            "boardingPolicy" => "boardingPolicy",
            "carrier" => "carrier",
            "flightNumber" => "flightNumber",
            "flightDistance" => "flightDistance",
            "estimatedFlightDuration" => "estimatedFlightDuration",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The time when a passenger can check into the flight online.
     *
     *
     * @var DateTime|null
     */
    protected $webCheckinTime;

    /**
     * Identifier of the flight's departure gate.
     *
     *
     * @var string
     */
    protected $departureGate;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
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
     * The kind of aircraft (e.g., "Boeing 747").
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vehicle|string
     */
    protected $aircraft;

    /**
     * Identifier of the flight's arrival terminal.
     *
     *
     * @var string
     */
    protected $arrivalTerminal;

    /**
     * The airport where the flight originates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $departureAirport;

    /**
     * Identifier of the flight's arrival gate.
     *
     *
     * @var string
     */
    protected $arrivalGate;

    /**
     * Identifier of the flight's departure terminal.
     *
     *
     * @var string
     */
    protected $departureTerminal;

    /**
     * The airport where the flight terminates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $arrivalAirport;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BoardingPolicyType|null
     */
    protected $boardingPolicy;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $carrier;

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     *
     *
     * @var string
     */
    protected $flightNumber;

    /**
     * The distance of the flight.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $flightDistance;

    /**
     * The estimated time the flight will take.
     *
     *
     * @var DateInterval|string|null
     */
    protected $estimatedFlightDuration;

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
        $types = [
            "DateTime",
            "null",
        ];

        $webCheckinTime = self::checkTypes($webCheckinTime, $types);

        $this->webCheckinTime = $webCheckinTime;
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
        $types = [
            "string",
        ];

        $departureGate = self::checkTypes($departureGate, $types);

        $this->departureGate = $departureGate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

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
        $types = [
            "string",
        ];

        $mealService = self::checkTypes($mealService, $types);

        $this->mealService = $mealService;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Vehicle",
            "string",
        ];

        $aircraft = self::checkTypes($aircraft, $types);

        $this->aircraft = $aircraft;
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
        $types = [
            "string",
        ];

        $arrivalTerminal = self::checkTypes($arrivalTerminal, $types);

        $this->arrivalTerminal = $arrivalTerminal;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Airport",
        ];

        $departureAirport = self::checkTypes($departureAirport, $types);

        $this->departureAirport = $departureAirport;
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
        $types = [
            "string",
        ];

        $arrivalGate = self::checkTypes($arrivalGate, $types);

        $this->arrivalGate = $arrivalGate;
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
        $types = [
            "string",
        ];

        $departureTerminal = self::checkTypes($departureTerminal, $types);

        $this->departureTerminal = $departureTerminal;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Airport",
        ];

        $arrivalAirport = self::checkTypes($arrivalAirport, $types);

        $this->arrivalAirport = $arrivalAirport;
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
        $types = [
            "\OpenActive\Enums\SchemaOrg\BoardingPolicyType",
            "null",
        ];

        $boardingPolicy = self::checkTypes($boardingPolicy, $types);

        $this->boardingPolicy = $boardingPolicy;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
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
        $types = [
            "string",
        ];

        $flightNumber = self::checkTypes($flightNumber, $types);

        $this->flightNumber = $flightNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getFlightDistance()
    {
        return $this->flightDistance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|string $flightDistance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFlightDistance($flightDistance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $flightDistance = self::checkTypes($flightDistance, $types);

        $this->flightDistance = $flightDistance;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }

    /**
     * @param DateInterval|string|null $estimatedFlightDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedFlightDuration($estimatedFlightDuration)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $estimatedFlightDuration = self::checkTypes($estimatedFlightDuration, $types);

        $this->estimatedFlightDuration = $estimatedFlightDuration;
    }

}
