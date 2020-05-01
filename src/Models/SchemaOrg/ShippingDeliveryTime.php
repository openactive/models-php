<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShippingDeliveryTime extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShippingDeliveryTime";
    }

    public static function fieldList() {
        $fields = [
            "cutoffTime" => "cutoffTime",
            "transitTime" => "transitTime",
            "businessDays" => "businessDays",
            "handlingTime" => "handlingTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the <a class="localLink" href="https://schema.org/ShippingRateSettings">ShippingRateSettings</a> publication pattern. The time is indicated using the time notation from the ISO-8601 DateTime format, e.g.
     *       14:45:15Z would represent a daily cutoff at 14:45h UTC.
     *
     *
     * @var string
     */
    protected $cutoffTime;

    /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue, unitCode (d for DAY).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $transitTime;

    /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    protected $businessDays;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $handlingTime;

    /**
     * @return string
     */
    public function getCutoffTime()
    {
        return $this->cutoffTime;
    }

    /**
     * @param string $cutoffTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCutoffTime($cutoffTime)
    {
        $types = array(
            "string",
        );

        $cutoffTime = self::checkTypes($cutoffTime, $types);

        $this->cutoffTime = $cutoffTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getTransitTime()
    {
        return $this->transitTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $transitTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransitTime($transitTime)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $transitTime = self::checkTypes($transitTime, $types);

        $this->transitTime = $transitTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    public function getBusinessDays()
    {
        return $this->businessDays;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification $businessDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessDays($businessDays)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
        );

        $businessDays = self::checkTypes($businessDays, $types);

        $this->businessDays = $businessDays;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $handlingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHandlingTime($handlingTime)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $handlingTime = self::checkTypes($handlingTime, $types);

        $this->handlingTime = $handlingTime;
    }

}
