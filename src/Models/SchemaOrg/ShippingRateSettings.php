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
            "freeShippingThreshold" => "freeShippingThreshold",
            "shippingRate" => "shippingRate",
            "doesNotShip" => "doesNotShip",
            "shippingLabel" => "shippingLabel",
            "isUnlabelledFallback" => "isUnlabelledFallback",
            "shippingDestination" => "shippingDestination",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A monetary value above which (or equal to) the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]] matching this [[ShippingRateSettings]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DeliveryChargeSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $freeShippingThreshold;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $shippingRate;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     *
     *
     * @var bool|null
     */
    protected $doesNotShip;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     *
     * @var string
     */
    protected $shippingLabel;

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
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
     * @return \OpenActive\Models\SchemaOrg\DeliveryChargeSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getFreeShippingThreshold()
    {
        return $this->freeShippingThreshold;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DeliveryChargeSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount $freeShippingThreshold
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFreeShippingThreshold($freeShippingThreshold)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DeliveryChargeSpecification",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $freeShippingThreshold = self::checkTypes($freeShippingThreshold, $types);

        $this->freeShippingThreshold = $freeShippingThreshold;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $shippingRate = self::checkTypes($shippingRate, $types);

        $this->shippingRate = $shippingRate;
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
        $types = [
            "bool",
            "null",
        ];

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
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedRegion",
        ];

        $shippingDestination = self::checkTypes($shippingDestination, $types);

        $this->shippingDestination = $shippingDestination;
    }

}
