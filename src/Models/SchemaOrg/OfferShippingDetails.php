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
            "shippingDestination" => "shippingDestination",
            "doesNotShip" => "doesNotShip",
            "shippingSettingsLink" => "shippingSettingsLink",
            "transitTimeLabel" => "transitTimeLabel",
            "shippingLabel" => "shippingLabel",
            "deliveryTime" => "deliveryTime",
            "shippingRate" => "shippingRate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways e.g. postalCode ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    protected $shippingDestination;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     *
     *
     * @var bool|null
     */
    protected $doesNotShip;

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
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     *
     * @var string
     */
    protected $shippingLabel;

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ShippingDeliveryTime|string
     */
    protected $deliveryTime;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $shippingRate;

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
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getShippingRate()
    {
        return $this->shippingRate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $shippingRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingRate($shippingRate)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $shippingRate = self::checkTypes($shippingRate, $types);

        $this->shippingRate = $shippingRate;
    }

}
