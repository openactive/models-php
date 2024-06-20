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
            "handlingTime" => "handlingTime",
            "businessDays" => "businessDays",
            "transitTime" => "transitTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
     *
     *
     * @var string|null
     */
    protected $cutoffTime;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $handlingTime;

    /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    protected $businessDays;

    /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue, unitCode (d for DAY).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $transitTime;

    /**
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->cutoffTime;
    }

    /**
     * @param string|null $cutoffTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCutoffTime($cutoffTime)
    {
        $types = [
            "Time",
            "null",
        ];

        $cutoffTime = self::checkTypes($cutoffTime, $types);

        $this->cutoffTime = $cutoffTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $handlingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHandlingTime($handlingTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $handlingTime = self::checkTypes($handlingTime, $types);

        $this->handlingTime = $handlingTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    public function getBusinessDays()
    {
        return $this->businessDays;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string $businessDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessDays($businessDays)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
            "string",
        ];

        $businessDays = self::checkTypes($businessDays, $types);

        $this->businessDays = $businessDays;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getTransitTime()
    {
        return $this->transitTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $transitTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransitTime($transitTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $transitTime = self::checkTypes($transitTime, $types);

        $this->transitTime = $transitTime;
    }

}
