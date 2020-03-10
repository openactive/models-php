<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Ticket extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Ticket";
    }

    public static function fieldList() {
        $fields = [
            "underName" => "underName",
            "dateIssued" => "dateIssued",
            "totalPrice" => "totalPrice",
            "priceCurrency" => "priceCurrency",
            "ticketNumber" => "ticketNumber",
            "issuedBy" => "issuedBy",
            "ticketToken" => "ticketToken",
            "ticketedSeat" => "ticketedSeat",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The person or organization the reservation or ticket is for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $underName;

    /**
     * The date the ticket was issued.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateIssued;

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
     * @var string|float|\OpenActive\Models\SchemaOrg\PriceSpecification|null
     */
    protected $totalPrice;

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
     * The unique identifier for the ticket.
     *
     *
     * @var string
     */
    protected $ticketNumber;

    /**
     * The organization issuing the ticket or permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $issuedBy;

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     *
     *
     * @var string
     */
    protected $ticketToken;

    /**
     * The seat associated with the ticket.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Seat
     */
    protected $ticketedSeat;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getUnderName()
    {
        return $this->underName;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $underName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnderName($underName)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $underName = self::checkTypes($underName, $types);

        $this->underName = $underName;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateIssued()
    {
        return $this->dateIssued;
    }

    /**
     * @param Date|DateTime|null $dateIssued
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateIssued($dateIssued)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $dateIssued = self::checkTypes($dateIssued, $types);

        $this->dateIssued = $dateIssued;
    }

    /**
     * @return string|float|\OpenActive\Models\SchemaOrg\PriceSpecification|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param string|float|\OpenActive\Models\SchemaOrg\PriceSpecification|null $totalPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPrice($totalPrice)
    {
        $types = array(
            "string",
            "float",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "null",
        );

        $totalPrice = self::checkTypes($totalPrice, $types);

        $this->totalPrice = $totalPrice;
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
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * @param string $ticketNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTicketNumber($ticketNumber)
    {
        $types = array(
            "string",
        );

        $ticketNumber = self::checkTypes($ticketNumber, $types);

        $this->ticketNumber = $ticketNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $issuedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedBy($issuedBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $issuedBy = self::checkTypes($issuedBy, $types);

        $this->issuedBy = $issuedBy;
    }

    /**
     * @return string
     */
    public function getTicketToken()
    {
        return $this->ticketToken;
    }

    /**
     * @param string $ticketToken
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTicketToken($ticketToken)
    {
        $types = array(
            "string",
        );

        $ticketToken = self::checkTypes($ticketToken, $types);

        $this->ticketToken = $ticketToken;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Seat
     */
    public function getTicketedSeat()
    {
        return $this->ticketedSeat;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Seat $ticketedSeat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTicketedSeat($ticketedSeat)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Seat",
        );

        $ticketedSeat = self::checkTypes($ticketedSeat, $types);

        $this->ticketedSeat = $ticketedSeat;
    }

}
