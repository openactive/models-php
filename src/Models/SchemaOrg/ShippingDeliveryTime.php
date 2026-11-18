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
            "businessDays" => "businessDays",
            "cutoffTime" => "cutoffTime",
            "handlingTime" => "handlingTime",
            "transitTime" => "transitTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|\OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string|null
     */
    protected $businessDays;

    /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
     *
     *
     * @var string|null
     */
    protected $cutoffTime;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     * 
     * In the context of [[ShippingDeliveryTime]], Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
     * 
     * In the context of [[ShippingService]], use the [[ServicePeriod]] format, that contains the same information in a structured form, with cut-off time, business days and duration.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    protected $handlingTime;

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
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|\OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string|null
     */
    public function getBusinessDays()
    {
        return $this->businessDays;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|\OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string|null $businessDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessDays($businessDays)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
            "string",
            "null",
        ];

        $businessDays = self::checkTypes($businessDays, $types);

        $this->businessDays = $businessDays;
    }

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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string $handlingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHandlingTime($handlingTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\ServicePeriod",
            "string",
        ];

        $handlingTime = self::checkTypes($handlingTime, $types);

        $this->handlingTime = $handlingTime;
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

}
