<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShippingConditions extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShippingConditions";
    }

    public static function fieldList() {
        $fields = [
            "depth" => "depth",
            "doesNotShip" => "doesNotShip",
            "height" => "height",
            "numItems" => "numItems",
            "orderValue" => "orderValue",
            "seasonalOverride" => "seasonalOverride",
            "shippingDestination" => "shippingDestination",
            "shippingOrigin" => "shippingOrigin",
            "shippingRate" => "shippingRate",
            "transitTime" => "transitTime",
            "weight" => "weight",
            "width" => "width",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * Limits the number of items being shipped for which these conditions apply.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numItems;

    /**
     * Minimum and maximum order value for which these shipping conditions are valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $orderValue;

    /**
     * Limited period during which these shipping conditions apply.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    protected $seasonalOverride;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedRegion|string
     */
    protected $shippingDestination;

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
     * The typical delay the order has been sent for delivery and the goods reach the final customer.
     * 
     *   In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]]. Typical properties: minValue, maxValue, unitCode (d for DAY).
     * 
     *   In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It has a duration (as a [[QuantitativeValue]]) and also business days and a cut-off time.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    protected $transitTime;

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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumItems()
    {
        return $this->numItems;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numItems
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumItems($numItems)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numItems = self::checkTypes($numItems, $types);

        $this->numItems = $numItems;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getOrderValue()
    {
        return $this->orderValue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $orderValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderValue($orderValue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $orderValue = self::checkTypes($orderValue, $types);

        $this->orderValue = $orderValue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    public function getSeasonalOverride()
    {
        return $this->seasonalOverride;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string $seasonalOverride
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeasonalOverride($seasonalOverride)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
            "string",
        ];

        $seasonalOverride = self::checkTypes($seasonalOverride, $types);

        $this->seasonalOverride = $seasonalOverride;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    public function getTransitTime()
    {
        return $this->transitTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string $transitTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransitTime($transitTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\ServicePeriod",
            "string",
        ];

        $transitTime = self::checkTypes($transitTime, $types);

        $this->transitTime = $transitTime;
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
