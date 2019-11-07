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
     * @var Offer
     */
    protected $offers;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var Organization|Person
     */
    protected $provider;

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
     * @return Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return Organization|Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param Organization|Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

}
