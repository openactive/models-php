<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Trip extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Trip";
    }

    public static function fieldList() {
        $fields = [
            "subTrip" => "subTrip",
            "itinerary" => "itinerary",
            "partOfTrip" => "partOfTrip",
            "departureTime" => "departureTime",
            "arrivalTime" => "arrivalTime",
            "offers" => "offers",
            "provider" => "provider",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Identifies a <a class="localLink" href="https://schema.org/Trip">Trip</a> that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $subTrip;

    /**
     * Destination(s) ( <a class="localLink" href="https://schema.org/Place">Place</a> ) that make up a trip. For a trip where destination order is important use <a class="localLink" href="https://schema.org/ItemList">ItemList</a> to specify that order (see examples).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $itinerary;

    /**
     * Identifies that this <a class="localLink" href="https://schema.org/Trip">Trip</a> is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $partOfTrip;

    /**
     * The expected departure time.
     *
     *
     * @var DateTime|string|null
     */
    protected $departureTime;

    /**
     * The expected arrival time.
     *
     *
     * @var DateTime|string|null
     */
    protected $arrivalTime;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $provider;

    /**
     * @return \OpenActive\Models\SchemaOrg\Trip
     */
    public function getSubTrip()
    {
        return $this->subTrip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Trip $subTrip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubTrip($subTrip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Trip",
        );

        $subTrip = self::checkTypes($subTrip, $types);

        $this->subTrip = $subTrip;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ItemList $itinerary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItinerary($itinerary)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $itinerary = self::checkTypes($itinerary, $types);

        $this->itinerary = $itinerary;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Trip
     */
    public function getPartOfTrip()
    {
        return $this->partOfTrip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Trip $partOfTrip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfTrip($partOfTrip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Trip",
        );

        $partOfTrip = self::checkTypes($partOfTrip, $types);

        $this->partOfTrip = $partOfTrip;
    }

    /**
     * @return DateTime|string|null
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param DateTime|string|null $departureTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureTime($departureTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $departureTime = self::checkTypes($departureTime, $types);

        $this->departureTime = $departureTime;
    }

    /**
     * @return DateTime|string|null
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * @param DateTime|string|null $arrivalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalTime($arrivalTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $arrivalTime = self::checkTypes($arrivalTime, $types);

        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

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

}
