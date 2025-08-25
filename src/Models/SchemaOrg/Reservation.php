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
            "bookingTime" => "bookingTime",
            "underName" => "underName",
            "broker" => "broker",
            "reservedTicket" => "reservedTicket",
            "programMembershipUsed" => "programMembershipUsed",
            "modifiedTime" => "modifiedTime",
            "reservationFor" => "reservationFor",
            "priceCurrency" => "priceCurrency",
            "provider" => "provider",
            "totalPrice" => "totalPrice",
            "reservationId" => "reservationId",
            "reservationStatus" => "reservationStatus",
            "bookingAgent" => "bookingAgent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date and time the reservation was booked.
     *
     *
     * @var DateTime|null
     */
    protected $bookingTime;

    /**
     * The person or organization the reservation or ticket is for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $underName;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $broker;

    /**
     * A ticket associated with the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Ticket|string
     */
    protected $reservedTicket;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProgramMembership|string
     */
    protected $programMembershipUsed;

    /**
     * The date and time the reservation was modified.
     *
     *
     * @var DateTime|null
     */
    protected $modifiedTime;

    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $reservationFor;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $provider;

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PriceSpecification|Number|null
     */
    protected $totalPrice;

    /**
     * A unique identifier for the reservation.
     *
     *
     * @var string
     */
    protected $reservationId;

    /**
     * The current status of the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ReservationStatusType|string
     */
    protected $reservationStatus;

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $bookingAgent;

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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getUnderName()
    {
        return $this->underName;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $underName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnderName($underName)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $underName = self::checkTypes($underName, $types);

        $this->underName = $underName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PriceSpecification|Number|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PriceSpecification|Number|null $totalPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPrice($totalPrice)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "Number",
            "null",
        ];

        $totalPrice = self::checkTypes($totalPrice, $types);

        $this->totalPrice = $totalPrice;
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

}
