<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Reservation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Reservation";
    }

    public static function fieldList() {
        $fields = [
            "modifiedTime" => "modifiedTime",
            "totalPrice" => "totalPrice",
            "reservedTicket" => "reservedTicket",
            "reservationStatus" => "reservationStatus",
            "provider" => "provider",
            "broker" => "broker",
            "bookingTime" => "bookingTime",
            "programMembershipUsed" => "programMembershipUsed",
            "bookingAgent" => "bookingAgent",
            "priceCurrency" => "priceCurrency",
            "reservationId" => "reservationId",
            "underName" => "underName",
            "reservationFor" => "reservationFor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date and time the reservation was modified.
     *
     *
     * @var DateTime|null
     */
    protected $modifiedTime;

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null
     */
    protected $totalPrice;

    /**
     * A ticket associated with the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Ticket|string
     */
    protected $reservedTicket;

    /**
     * The current status of the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ReservationStatusType|string
     */
    protected $reservationStatus;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $broker;

    /**
     * The date and time the reservation was booked.
     *
     *
     * @var DateTime|null
     */
    protected $bookingTime;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProgramMembership|string
     */
    protected $programMembershipUsed;

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $bookingAgent;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * A unique identifier for the reservation.
     *
     *
     * @var string
     */
    protected $reservationId;

    /**
     * The person or organization the reservation or ticket is for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $underName;

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $reservationFor;

    /**
     * @return DateTime|null
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @param DateTime|null $modifiedTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setModifiedTime($modifiedTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $modifiedTime = self::checkTypes($modifiedTime, $types);

        $this->modifiedTime = $modifiedTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null $totalPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPrice($totalPrice)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
            "Number",
            "null",
        ];

        $totalPrice = self::checkTypes($totalPrice, $types);

        $this->totalPrice = $totalPrice;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Ticket|string
     */
    public function getReservedTicket()
    {
        return $this->reservedTicket;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Ticket|string $reservedTicket
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservedTicket($reservedTicket)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Ticket",
            "string",
        ];

        $reservedTicket = self::checkTypes($reservedTicket, $types);

        $this->reservedTicket = $reservedTicket;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ReservationStatusType|string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ReservationStatusType|string $reservationStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservationStatus($reservationStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ReservationStatusType",
            "string",
        ];

        $reservationStatus = self::checkTypes($reservationStatus, $types);

        $this->reservationStatus = $reservationStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return DateTime|null
     */
    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    /**
     * @param DateTime|null $bookingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingTime($bookingTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $bookingTime = self::checkTypes($bookingTime, $types);

        $this->bookingTime = $bookingTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProgramMembership|string
     */
    public function getProgramMembershipUsed()
    {
        return $this->programMembershipUsed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProgramMembership|string $programMembershipUsed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramMembershipUsed($programMembershipUsed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
            "string",
        ];

        $programMembershipUsed = self::checkTypes($programMembershipUsed, $types);

        $this->programMembershipUsed = $programMembershipUsed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBookingAgent()
    {
        return $this->bookingAgent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $bookingAgent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingAgent($bookingAgent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $bookingAgent = self::checkTypes($bookingAgent, $types);

        $this->bookingAgent = $bookingAgent;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceCurrency($priceCurrency)
    {
        $types = [
            "string",
        ];

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param string $reservationId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservationId($reservationId)
    {
        $types = [
            "string",
        ];

        $reservationId = self::checkTypes($reservationId, $types);

        $this->reservationId = $reservationId;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getUnderName()
    {
        return $this->underName;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $underName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnderName($underName)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $underName = self::checkTypes($underName, $types);

        $this->underName = $underName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getReservationFor()
    {
        return $this->reservationFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $reservationFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservationFor($reservationFor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $reservationFor = self::checkTypes($reservationFor, $types);

        $this->reservationFor = $reservationFor;
    }

}
