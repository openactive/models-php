<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class QuantitativeValueDistribution extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:QuantitativeValueDistribution";
    }

    public static function fieldList() {
        $fields = [
            "percentile90" => "percentile90",
            "percentile10" => "percentile10",
            "duration" => "duration",
            "median" => "median",
            "percentile25" => "percentile25",
            "percentile75" => "percentile75",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The 90th percentile value.
     *
     *
     * @var Number|null
     */
    protected $percentile90;

    /**
     * The 10th percentile value.
     *
     *
     * @var Number|null
     */
    protected $percentile10;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The median value.
     *
     *
     * @var Number|null
     */
    protected $median;

    /**
     * The 25th percentile value.
     *
     *
     * @var Number|null
     */
    protected $percentile25;

    /**
     * The 75th percentile value.
     *
     *
     * @var Number|null
     */
    protected $percentile75;

    /**
     * @return Number|null
     */
    public function getPercentile90()
    {
        return $this->percentile90;
    }

    /**
     * @param Number|null $percentile90
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile90($percentile90)
    {
        $types = [
            "Number",
            "null",
        ];

        $percentile90 = self::checkTypes($percentile90, $types);

        $this->percentile90 = $percentile90;
    }

    /**
     * @return Number|null
     */
    public function getPercentile10()
    {
        return $this->percentile10;
    }

    /**
     * @param Number|null $percentile10
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile10($percentile10)
    {
        $types = [
            "Number",
            "null",
        ];

        $percentile10 = self::checkTypes($percentile10, $types);

        $this->percentile10 = $percentile10;
    }

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return Number|null
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * @param Number|null $median
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedian($median)
    {
        $types = [
            "Number",
            "null",
        ];

        $median = self::checkTypes($median, $types);

        $this->median = $median;
    }

    /**
     * @return Number|null
     */
    public function getPercentile25()
    {
        return $this->percentile25;
    }

    /**
     * @param Number|null $percentile25
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile25($percentile25)
    {
        $types = [
            "Number",
            "null",
        ];

        $percentile25 = self::checkTypes($percentile25, $types);

        $this->percentile25 = $percentile25;
    }

    /**
     * @return Number|null
     */
    public function getPercentile75()
    {
        return $this->percentile75;
    }

    /**
     * @param Number|null $percentile75
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile75($percentile75)
    {
        $types = [
            "Number",
            "null",
        ];

        $percentile75 = self::checkTypes($percentile75, $types);

        $this->percentile75 = $percentile75;
    }

}
