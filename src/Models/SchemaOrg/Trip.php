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
            "arrivalTime" => "arrivalTime",
            "offers" => "offers",
            "provider" => "provider",
            "subTrip" => "subTrip",
            "itinerary" => "itinerary",
            "departureTime" => "departureTime",
            "partOfTrip" => "partOfTrip",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The expected arrival time.
     *
     *
     * @var DateTime|string|null
     */
    protected $arrivalTime;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $provider;

    /**
     * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $subTrip;

    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination order is important use [[ItemList]] to specify that order (see examples).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $itinerary;

    /**
     * The expected departure time.
     *
     *
     * @var DateTime|string|null
     */
    protected $departureTime;

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $partOfTrip;

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
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $arrivalTime = self::checkTypes($arrivalTime, $types);

        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Trip",
        ];

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $itinerary = self::checkTypes($itinerary, $types);

        $this->itinerary = $itinerary;
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
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $departureTime = self::checkTypes($departureTime, $types);

        $this->departureTime = $departureTime;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Trip",
        ];

        $partOfTrip = self::checkTypes($partOfTrip, $types);

        $this->partOfTrip = $partOfTrip;
    }

}
