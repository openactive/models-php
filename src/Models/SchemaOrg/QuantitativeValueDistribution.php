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

    /**
     * The 75th percentile value.
     *
     *
     * @var float|null
     */
    protected $percentile75;

    /**
     * The 90th percentile value.
     *
     *
     * @var float|null
     */
    protected $percentile90;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The 10th percentile value.
     *
     *
     * @var float|null
     */
    protected $percentile10;

    /**
     * The median value.
     *
     *
     * @var float|null
     */
    protected $median;

    /**
     * The 25th percentile value.
     *
     *
     * @var float|null
     */
    protected $percentile25;

    /**
     * @return float|null
     */
    public function getPercentile75()
    {
        return $this->percentile75;
    }

    /**
     * @param float|null $percentile75
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile75($percentile75)
    {
        $types = array(
            "float",
            "null",
        );

        $percentile75 = self::checkTypes($percentile75, $types);

        $this->percentile75 = $percentile75;
    }

    /**
     * @return float|null
     */
    public function getPercentile90()
    {
        return $this->percentile90;
    }

    /**
     * @param float|null $percentile90
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile90($percentile90)
    {
        $types = array(
            "float",
            "null",
        );

        $percentile90 = self::checkTypes($percentile90, $types);

        $this->percentile90 = $percentile90;
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
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return float|null
     */
    public function getPercentile10()
    {
        return $this->percentile10;
    }

    /**
     * @param float|null $percentile10
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile10($percentile10)
    {
        $types = array(
            "float",
            "null",
        );

        $percentile10 = self::checkTypes($percentile10, $types);

        $this->percentile10 = $percentile10;
    }

    /**
     * @return float|null
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * @param float|null $median
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedian($median)
    {
        $types = array(
            "float",
            "null",
        );

        $median = self::checkTypes($median, $types);

        $this->median = $median;
    }

    /**
     * @return float|null
     */
    public function getPercentile25()
    {
        return $this->percentile25;
    }

    /**
     * @param float|null $percentile25
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPercentile25($percentile25)
    {
        $types = array(
            "float",
            "null",
        );

        $percentile25 = self::checkTypes($percentile25, $types);

        $this->percentile25 = $percentile25;
    }

}
