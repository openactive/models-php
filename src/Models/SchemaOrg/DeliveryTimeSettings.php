<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeliveryTimeSettings extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DeliveryTimeSettings";
    }

    public static function fieldList() {
        $fields = [
            "deliveryTime" => "deliveryTime",
            "transitTimeLabel" => "transitTimeLabel",
            "shippingDestination" => "shippingDestination",
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

}
