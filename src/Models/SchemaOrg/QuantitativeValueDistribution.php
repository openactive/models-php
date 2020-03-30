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
            "percentile25" => "percentile25",
            "median" => "median",
            "percentile10" => "percentile10",
            "duration" => "duration",
            "percentile90" => "percentile90",
            "percentile75" => "percentile75",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The 25th percentile value.
     *
     *
     * @var null|float
     */
    protected $percentile25;

    /**
     * The median value.
     *
     *
     * @var null|float
     */
    protected $median;

    /**
     * The 10th percentile value.
     *
     *
     * @var null|float
     */
    protected $percentile10;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var null|DateInterval
     */
    protected $duration;

    /**
     * The 90th percentile value.
     *
     *
     * @var null|float
     */
    protected $percentile90;

    /**
     * The 75th percentile value.
     *
     *
     * @var null|float
     */
    protected $percentile75;

    /**
     * @return null|float
     */
    public function getPercentile25()
    {
        return $this->percentile25;
    }

    /**
     * @param null|float $percentile25
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile25($percentile25)
    {
        $types = array(
            "null",
            "float",
        );

        $percentile25 = self::checkTypes($percentile25, $types);

        $this->percentile25 = $percentile25;
    }

    /**
     * @return null|float
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * @param null|float $median
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedian($median)
    {
        $types = array(
            "null",
            "float",
        );

        $median = self::checkTypes($median, $types);

        $this->median = $median;
    }

    /**
     * @return null|float
     */
    public function getPercentile10()
    {
        return $this->percentile10;
    }

    /**
     * @param null|float $percentile10
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile10($percentile10)
    {
        $types = array(
            "null",
            "float",
        );

        $percentile10 = self::checkTypes($percentile10, $types);

        $this->percentile10 = $percentile10;
    }

    /**
     * @return null|DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param null|DateInterval $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return null|float
     */
    public function getPercentile90()
    {
        return $this->percentile90;
    }

    /**
     * @param null|float $percentile90
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile90($percentile90)
    {
        $types = array(
            "null",
            "float",
        );

        $percentile90 = self::checkTypes($percentile90, $types);

        $this->percentile90 = $percentile90;
    }

    /**
     * @return null|float
     */
    public function getPercentile75()
    {
        return $this->percentile75;
    }

    /**
     * @param null|float $percentile75
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile75($percentile75)
    {
        $types = array(
            "null",
            "float",
        );

        $percentile75 = self::checkTypes($percentile75, $types);

        $this->percentile75 = $percentile75;
    }

}
