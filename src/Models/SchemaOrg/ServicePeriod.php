<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ServicePeriod extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ServicePeriod";
    }

    public static function fieldList() {
        $fields = [
            "businessDays" => "businessDays",
            "cutoffTime" => "cutoffTime",
            "duration" => "duration",
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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $duration;

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
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

}
