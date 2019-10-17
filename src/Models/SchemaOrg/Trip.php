<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Trip extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var Organization|Person
     */
    protected $provider;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var Offer
     */
    protected $offers;

    /**
     * The expected arrival time.
     *
     *
     * @var DateTime|null
     */
    protected $arrivalTime;

    /**
     * The expected departure time.
     *
     *
     * @var DateTime|null
     */
    protected $departureTime;

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateTime|null
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * @param DateTime|null $arrivalTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setArrivalTime($arrivalTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $arrivalTime = self::checkTypes($arrivalTime, $types);

        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return DateTime|null
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param DateTime|null $departureTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDepartureTime($departureTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $departureTime = self::checkTypes($departureTime, $types);

        $this->departureTime = $departureTime;
    }

}
