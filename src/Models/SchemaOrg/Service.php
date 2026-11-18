<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Service extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Service";
    }

    public static function fieldList() {
        $fields = [
            "aggregateRating" => "aggregateRating",
            "areaServed" => "areaServed",
            "audience" => "audience",
            "availableChannel" => "availableChannel",
            "award" => "award",
            "brand" => "brand",
            "broker" => "broker",
            "category" => "category",
            "hasCertification" => "hasCertification",
            "hasOfferCatalog" => "hasOfferCatalog",
            "hoursAvailable" => "hoursAvailable",
            "isRelatedTo" => "isRelatedTo",
            "isSimilarTo" => "isSimilarTo",
            "logo" => "logo",
            "offers" => "offers",
            "produces" => "produces",
            "provider" => "provider",
            "providerMobility" => "providerMobility",
            "review" => "review",
            "serviceArea" => "serviceArea",
            "serviceAudience" => "serviceAudience",
            "serviceOutput" => "serviceOutput",
            "serviceType" => "serviceType",
            "slogan" => "slogan",
            "termsOfService" => "termsOfService",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $areaServed;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $audience;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ServiceChannel|string
     */
    protected $availableChannel;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $brand;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $broker;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * Certification information about a product, organization, service, place, or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Certification|string
     */
    protected $hasCertification;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    protected $hasOfferCatalog;

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    protected $hoursAvailable;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    protected $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    protected $isSimilarTo;

    /**
     * An associated logo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $logo;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $offers;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $produces;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     *
     * @var string
     */
    protected $providerMobility;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * The geographic area where the service is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $serviceArea;

    /**
     * The audience eligible for this service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $serviceAudience;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $serviceOutput;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GovernmentBenefitsType|string|null
     */
    protected $serviceType;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * Human-readable terms of service documentation.
     *
     *
     * @var string
     */
    protected $termsOfService;

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating|string $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
            "string",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ServiceChannel|string
     */
    public function getAvailableChannel()
    {
        return $this->availableChannel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ServiceChannel|string $availableChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableChannel($availableChannel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ServiceChannel",
            "string",
        ];

        $availableChannel = self::checkTypes($availableChannel, $types);

        $this->availableChannel = $availableChannel;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = [
            "string",
        ];

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Brand",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
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
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Certification|string
     */
    public function getHasCertification()
    {
        return $this->hasCertification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Certification|string $hasCertification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCertification($hasCertification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Certification",
            "string",
        ];

        $hasCertification = self::checkTypes($hasCertification, $types);

        $this->hasCertification = $hasCertification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferCatalog|string $hasOfferCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
            "string",
        ];

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
            "string",
        ];

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string $isRelatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $isRelatedTo = self::checkTypes($isRelatedTo, $types);

        $this->isRelatedTo = $isRelatedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string $isSimilarTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $isSimilarTo = self::checkTypes($isSimilarTo, $types);

        $this->isSimilarTo = $isSimilarTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getProduces()
    {
        return $this->produces;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $produces
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProduces($produces)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $produces = self::checkTypes($produces, $types);

        $this->produces = $produces;
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
     * @return string
     */
    public function getProviderMobility()
    {
        return $this->providerMobility;
    }

    /**
     * @param string $providerMobility
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProviderMobility($providerMobility)
    {
        $types = [
            "string",
        ];

        $providerMobility = self::checkTypes($providerMobility, $types);

        $this->providerMobility = $providerMobility;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getServiceAudience()
    {
        return $this->serviceAudience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $serviceAudience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceAudience($serviceAudience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $serviceAudience = self::checkTypes($serviceAudience, $types);

        $this->serviceAudience = $serviceAudience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getServiceOutput()
    {
        return $this->serviceOutput;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $serviceOutput
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceOutput($serviceOutput)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $serviceOutput = self::checkTypes($serviceOutput, $types);

        $this->serviceOutput = $serviceOutput;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GovernmentBenefitsType|string|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GovernmentBenefitsType|string|null $serviceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceType($serviceType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\GovernmentBenefitsType",
            "string",
            "null",
        ];

        $serviceType = self::checkTypes($serviceType, $types);

        $this->serviceType = $serviceType;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = [
            "string",
        ];

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = [
            "string",
        ];

        $termsOfService = self::checkTypes($termsOfService, $types);

        $this->termsOfService = $termsOfService;
    }

}
