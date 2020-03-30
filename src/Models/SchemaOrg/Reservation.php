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
            "provider" => "provider",
            "programMembershipUsed" => "programMembershipUsed",
            "reservationStatus" => "reservationStatus",
            "underName" => "underName",
            "bookingAgent" => "bookingAgent",
            "totalPrice" => "totalPrice",
            "reservationFor" => "reservationFor",
            "priceCurrency" => "priceCurrency",
            "broker" => "broker",
            "modifiedTime" => "modifiedTime",
            "bookingTime" => "bookingTime",
            "reservationId" => "reservationId",
            "reservedTicket" => "reservedTicket",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $provider;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProgramMembership
     */
    protected $programMembershipUsed;

    /**
     * The current status of the reservation.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReservationStatusType|null
     */
    protected $reservationStatus;

    /**
     * The person or organization the reservation or ticket is for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $underName;

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $bookingAgent;

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|null|float|string
     */
    protected $totalPrice;

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $reservationFor;

    /**
     * The currency of the price, or a price component when attached to <a class="localLink" href="https://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $broker;

    /**
     * The date and time the reservation was modified.
     *
     *
     * @var null|DateTime
     */
    protected $modifiedTime;

    /**
     * The date and time the reservation was booked.
     *
     *
     * @var null|DateTime
     */
    protected $bookingTime;

    /**
     * A unique identifier for the reservation.
     *
     *
     * @var string
     */
    protected $reservationId;

    /**
     * A ticket associated with the reservation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Ticket
     */
    protected $reservedTicket;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProgramMembership
     */
    public function getProgramMembershipUsed()
    {
        return $this->programMembershipUsed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProgramMembership $programMembershipUsed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramMembershipUsed($programMembershipUsed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
        );

        $programMembershipUsed = self::checkTypes($programMembershipUsed, $types);

        $this->programMembershipUsed = $programMembershipUsed;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReservationStatusType|null
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReservationStatusType|null $reservationStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservationStatus($reservationStatus)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\ReservationStatusType",
            "null",
        );

        $reservationStatus = self::checkTypes($reservationStatus, $types);

        $this->reservationStatus = $reservationStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getUnderName()
    {
        return $this->underName;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $underName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnderName($underName)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $underName = self::checkTypes($underName, $types);

        $this->underName = $underName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getBookingAgent()
    {
        return $this->bookingAgent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $bookingAgent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingAgent($bookingAgent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $bookingAgent = self::checkTypes($bookingAgent, $types);

        $this->bookingAgent = $bookingAgent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|null|float|string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|null|float|string $totalPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPrice($totalPrice)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "null",
            "float",
            "string",
        );

        $totalPrice = self::checkTypes($totalPrice, $types);

        $this->totalPrice = $totalPrice;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getReservationFor()
    {
        return $this->reservationFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $reservationFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservationFor($reservationFor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

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
        $types = array(
            "string",
        );

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return null|DateTime
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @param null|DateTime $modifiedTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setModifiedTime($modifiedTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $modifiedTime = self::checkTypes($modifiedTime, $types);

        $this->modifiedTime = $modifiedTime;
    }

    /**
     * @return null|DateTime
     */
    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    /**
     * @param null|DateTime $bookingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingTime($bookingTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $bookingTime = self::checkTypes($bookingTime, $types);

        $this->bookingTime = $bookingTime;
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
        $types = array(
            "string",
        );

        $reservationId = self::checkTypes($reservationId, $types);

        $this->reservationId = $reservationId;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Ticket
     */
    public function getReservedTicket()
    {
        return $this->reservedTicket;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Ticket $reservedTicket
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReservedTicket($reservedTicket)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Ticket",
        );

        $reservedTicket = self::checkTypes($reservedTicket, $types);

        $this->reservedTicket = $reservedTicket;
    }

}
