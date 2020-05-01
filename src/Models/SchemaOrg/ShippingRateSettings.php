<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShippingRateSettings extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShippingRateSettings";
    }

    public static function fieldList() {
        $fields = [
            "shippingRate" => "shippingRate",
            "shippingLabel" => "shippingLabel",
            "freeShippingThreshold" => "freeShippingThreshold",
            "isUnlabelledFallback" => "isUnlabelledFallback",
            "shippingDestination" => "shippingDestination",
            "doesNotShip" => "doesNotShip",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * A monetary value above which (or equal to) the shipping rate becomes free. Intended to be used via an <a class="localLink" href="https://schema.org/OfferShippingSpecification">OfferShippingSpecification</a> with <a class="localLink" href="https://schema.org/shippingSettingsLink">shippingSettingsLink</a> matching this <a class="localLink" href="https://schema.org/ShippingSettings">ShippingSettings</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\DeliveryChargeSpecification
     */
    protected $freeShippingThreshold;

    /**
     * This can be marked 'true' to indicate that some published ShippingRateSettings are intended to apply to all <a class="localLink" href="https://schema.org/OfferShippingDetails">OfferShippingDetails</a> published by the same merchant, when referenced by a <a class="localLink" href="https://schema.org/shippingSettingsLink">shippingSettingsLink</a> in those settings. It is not meaningful to use a 'true' value for this property alongside a shippingLabel, since this property is for use with unlabelled ShippingRateSettings.
     *
     *
     * @var bool|null
     */
    protected $isUnlabelledFallback;

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
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\DeliveryChargeSpecification
     */
    public function getFreeShippingThreshold()
    {
        return $this->freeShippingThreshold;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\DeliveryChargeSpecification $freeShippingThreshold
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFreeShippingThreshold($freeShippingThreshold)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\DeliveryChargeSpecification",
        );

        $freeShippingThreshold = self::checkTypes($freeShippingThreshold, $types);

        $this->freeShippingThreshold = $freeShippingThreshold;
    }

    /**
     * @return bool|null
     */
    public function getIsUnlabelledFallback()
    {
        return $this->isUnlabelledFallback;
    }

    /**
     * @param bool|null $isUnlabelledFallback
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsUnlabelledFallback($isUnlabelledFallback)
    {
        $types = array(
            "bool",
            "null",
        );

        $isUnlabelledFallback = self::checkTypes($isUnlabelledFallback, $types);

        $this->isUnlabelledFallback = $isUnlabelledFallback;
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
