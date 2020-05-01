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
            "shippingRate" => "shippingRate",
            "shippingLabel" => "shippingLabel",
            "shippingSettingsLink" => "shippingSettingsLink",
            "transitTimeLabel" => "transitTimeLabel",
            "shippingDestination" => "shippingDestination",
            "doesNotShip" => "doesNotShip",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ShippingDeliveryTime
     */
    protected $deliveryTime;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the <a class="localLink" href="https://schema.org/MonetaryAmount">MonetaryAmount</a>) are most appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $shippingRate;

    /**
     * Label to match an <a class="localLink" href="https://schema.org/OfferShippingDetails">OfferShippingDetails</a> with a <a class="localLink" href="https://schema.org/ShippingRateSettings">ShippingRateSettings</a> (within the context of a <a class="localLink" href="https://schema.org/shippingSettingsLink">shippingSettingsLink</a> cross-reference).
     *
     *
     * @var string
     */
    protected $shippingLabel;

    /**
     * Link to a page containing <a class="localLink" href="https://schema.org/ShippingRateSettings">ShippingRateSettings</a> and <a class="localLink" href="https://schema.org/DeliveryTimeSettings">DeliveryTimeSettings</a> details.
     *
     *
     * @var string
     */
    protected $shippingSettingsLink;

    /**
     * Label to match an <a class="localLink" href="https://schema.org/OfferShippingDetails">OfferShippingDetails</a> with a <a class="localLink" href="https://schema.org/DeliveryTimeSettings">DeliveryTimeSettings</a> (within the context of a <a class="localLink" href="https://schema.org/shippingSettingsLink">shippingSettingsLink</a> cross-reference).
     *
     *
     * @var string
     */
    protected $transitTimeLabel;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways e.g. postalCode ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedRegion
     */
    protected $shippingDestination;

    /**
     * Indicates, as part of an <a class="localLink" href="https://schema.org/OfferShippingDetails">OfferShippingDetails</a>, when shipping to a particular <a class="localLink" href="https://schema.org/shippingDestination">shippingDestination</a> is not available.
     *
     *
     * @var bool|null
     */
    protected $doesNotShip;

    /**
     * @return \OpenActive\Models\SchemaOrg\ShippingDeliveryTime
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ShippingDeliveryTime $deliveryTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryTime($deliveryTime)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ShippingDeliveryTime",
        );

        $deliveryTime = self::checkTypes($deliveryTime, $types);

        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getShippingRate()
    {
        return $this->shippingRate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $shippingRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingRate($shippingRate)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $shippingRate = self::checkTypes($shippingRate, $types);

        $this->shippingRate = $shippingRate;
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
        $types = array(
            "string",
        );

        $shippingLabel = self::checkTypes($shippingLabel, $types);

        $this->shippingLabel = $shippingLabel;
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $transitTimeLabel = self::checkTypes($transitTimeLabel, $types);

        $this->transitTimeLabel = $transitTimeLabel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedRegion
     */
    public function getShippingDestination()
    {
        return $this->shippingDestination;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedRegion $shippingDestination
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingDestination($shippingDestination)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedRegion",
        );

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
        $types = array(
            "bool",
            "null",
        );

        $doesNotShip = self::checkTypes($doesNotShip, $types);

        $this->doesNotShip = $doesNotShip;
    }

}
