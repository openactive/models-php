<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfferShippingDetails extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OfferShippingDetails";
    }

    public static function fieldList() {
        $fields = [
            "deliveryTime" => "deliveryTime",
            "depth" => "depth",
            "doesNotShip" => "doesNotShip",
            "hasShippingService" => "hasShippingService",
            "height" => "height",
            "provider" => "provider",
            "shippingDestination" => "shippingDestination",
            "shippingLabel" => "shippingLabel",
            "shippingOrigin" => "shippingOrigin",
            "shippingRate" => "shippingRate",
            "shippingSettingsLink" => "shippingSettingsLink",
            "transitTimeLabel" => "transitTimeLabel",
            "validForMemberTier" => "validForMemberTier",
            "weight" => "weight",
            "width" => "width",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ShippingDeliveryTime|string
     */
    protected $deliveryTime;

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $depth;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     *
     *
     * @var bool|null
     */
    protected $doesNotShip;

    /**
     * Specification of a shipping service offered by the organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ShippingService|string
     */
    protected $hasShippingService;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    protected $shippingDestination;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     *
     * @var string
     */
    protected $shippingLabel;

    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    protected $shippingOrigin;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\ShippingRateSettings|string
     */
    protected $shippingRate;

    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
     *
     *
     * @var string
     */
    protected $shippingSettingsLink;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     *
     * @var string
     */
    protected $transitTimeLabel;

    /**
     * The membership program tier(s) an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    protected $validForMemberTier;

    /**
     * The weight of the product or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $weight;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $width;

    /**
     * @return \OpenActive\Models\SchemaOrg\ShippingDeliveryTime|string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ShippingDeliveryTime|string $deliveryTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryTime($deliveryTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ShippingDeliveryTime",
            "string",
        ];

        $deliveryTime = self::checkTypes($deliveryTime, $types);

        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $depth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

    /**
     * @return bool|null
     */
    public function getDoesNotShip()
    {
        return $this->doesNotShip;
    }

    /**
     * @param bool|null $doesNotShip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDoesNotShip($doesNotShip)
    {
        $types = [
            "bool",
            "null",
        ];

        $doesNotShip = self::checkTypes($doesNotShip, $types);

        $this->doesNotShip = $doesNotShip;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ShippingService|string
     */
    public function getHasShippingService()
    {
        return $this->hasShippingService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ShippingService|string $hasShippingService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasShippingService($hasShippingService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ShippingService",
            "string",
        ];

        $hasShippingService = self::checkTypes($hasShippingService, $types);

        $this->hasShippingService = $hasShippingService;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
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
     * @return \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    public function getShippingDestination()
    {
        return $this->shippingDestination;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedRegion|string $shippingDestination
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingDestination($shippingDestination)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedRegion",
            "string",
        ];

        $shippingDestination = self::checkTypes($shippingDestination, $types);

        $this->shippingDestination = $shippingDestination;
    }

    /**
     * @return string
     */
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    /**
     * @param string $shippingLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingLabel($shippingLabel)
    {
        $types = [
            "string",
        ];

        $shippingLabel = self::checkTypes($shippingLabel, $types);

        $this->shippingLabel = $shippingLabel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    public function getShippingOrigin()
    {
        return $this->shippingOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedRegion|string $shippingOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingOrigin($shippingOrigin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedRegion",
            "string",
        ];

        $shippingOrigin = self::checkTypes($shippingOrigin, $types);

        $this->shippingOrigin = $shippingOrigin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\ShippingRateSettings|string
     */
    public function getShippingRate()
    {
        return $this->shippingRate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\ShippingRateSettings|string $shippingRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingRate($shippingRate)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\ShippingRateSettings",
            "string",
        ];

        $shippingRate = self::checkTypes($shippingRate, $types);

        $this->shippingRate = $shippingRate;
    }

    /**
     * @return string
     */
    public function getShippingSettingsLink()
    {
        return $this->shippingSettingsLink;
    }

    /**
     * @param string $shippingSettingsLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingSettingsLink($shippingSettingsLink)
    {
        $types = [
            "string",
        ];

        $shippingSettingsLink = self::checkTypes($shippingSettingsLink, $types);

        $this->shippingSettingsLink = $shippingSettingsLink;
    }

    /**
     * @return string
     */
    public function getTransitTimeLabel()
    {
        return $this->transitTimeLabel;
    }

    /**
     * @param string $transitTimeLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransitTimeLabel($transitTimeLabel)
    {
        $types = [
            "string",
        ];

        $transitTimeLabel = self::checkTypes($transitTimeLabel, $types);

        $this->transitTimeLabel = $transitTimeLabel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    public function getValidForMemberTier()
    {
        return $this->validForMemberTier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MemberProgramTier|string $validForMemberTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidForMemberTier($validForMemberTier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MemberProgramTier",
            "string",
        ];

        $validForMemberTier = self::checkTypes($validForMemberTier, $types);

        $this->validForMemberTier = $validForMemberTier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $weight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

}
