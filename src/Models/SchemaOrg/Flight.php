<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Flight extends \OpenActive\Models\SchemaOrg\Trip
{
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
     * @var Organization
     */
    protected $carrier;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     *
     * @var Schema.NET.BoardingPolicyType|null
     */
    protected $boardingPolicy;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Vehicle
     */
    protected $aircraft;

    /**
     * The time when a passenger can check into the flight online.
     *
     *
     * @var DateTime|null
     */
    protected $webCheckinTime;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var Person|Organization
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
     * @var DateInterval|string|null
     */
    protected $estimatedFlightDuration;

    /**
     * The distance of the flight.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string
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
     * The airport where the flight originates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Airport
     */
    protected $departureAirport;

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return Organization
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param Organization $carrier
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCarrier($carrier)
    {
        $types = array(
            "Organization",
        );

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
    }

    /**
     * @return Schema.NET.BoardingPolicyType|null
     */
    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    /**
     * @param Schema.NET.BoardingPolicyType|null $boardingPolicy
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBoardingPolicy($boardingPolicy)
    {
        $types = array(
            "Schema.NET.BoardingPolicyType",
            "null",
        );

        $boardingPolicy = self::checkTypes($boardingPolicy, $types);

        $this->boardingPolicy = $boardingPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Vehicle
     */
    public function getAircraft()
    {
        return $this->aircraft;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Vehicle $aircraft
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAircraft($aircraft)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Vehicle",
        );

        $aircraft = self::checkTypes($aircraft, $types);

        $this->aircraft = $aircraft;
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
     * @throws \Exception If the provided argument is not of a supported type.
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

    /**
     * @return Person|Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Person|Organization $seller
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "Person",
            "Organization",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateInterval|string|null
     */
    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }

    /**
     * @param DateInterval|string|null $estimatedFlightDuration
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEstimatedFlightDuration($estimatedFlightDuration)
    {
        $types = array(
            "DateInterval",
            "string",
            "null",
        );

        $estimatedFlightDuration = self::checkTypes($estimatedFlightDuration, $types);

        $this->estimatedFlightDuration = $estimatedFlightDuration;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFlightDistance($flightDistance)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\Airport
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Airport $departureAirport
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param string $flightNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
