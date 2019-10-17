<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class QuantitativeValueDistribution extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The 25th percentile value.
     *
     *
     * @var decimal|null
     */
    protected $percentile25;

    /**
     * The median value.
     *
     *
     * @var decimal|null
     */
    protected $median;

    /**
     * The 10th percentile value.
     *
     *
     * @var decimal|null
     */
    protected $percentile10;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The 90th percentile value.
     *
     *
     * @var decimal|null
     */
    protected $percentile90;

    /**
     * The 75th percentile value.
     *
     *
     * @var decimal|null
     */
    protected $percentile75;

    /**
     * @return decimal|null
     */
    public function getPercentile25()
    {
        return $this->percentile25;
    }

    /**
     * @param decimal|null $percentile25
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPercentile25($percentile25)
    {
        $types = array(
            "decimal",
            "null",
        );

        $percentile25 = self::checkTypes($percentile25, $types);

        $this->percentile25 = $percentile25;
    }

    /**
     * @return decimal|null
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * @param decimal|null $median
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMedian($median)
    {
        $types = array(
            "decimal",
            "null",
        );

        $median = self::checkTypes($median, $types);

        $this->median = $median;
    }

    /**
     * @return decimal|null
     */
    public function getPercentile10()
    {
        return $this->percentile10;
    }

    /**
     * @param decimal|null $percentile10
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPercentile10($percentile10)
    {
        $types = array(
            "decimal",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|null
     */
    public function getPercentile90()
    {
        return $this->percentile90;
    }

    /**
     * @param decimal|null $percentile90
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPercentile90($percentile90)
    {
        $types = array(
            "decimal",
            "null",
        );

        $percentile90 = self::checkTypes($percentile90, $types);

        $this->percentile90 = $percentile90;
    }

    /**
     * @return decimal|null
     */
    public function getPercentile75()
    {
        return $this->percentile75;
    }

    /**
     * @param decimal|null $percentile75
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPercentile75($percentile75)
    {
        $types = array(
            "decimal",
            "null",
        );

        $percentile75 = self::checkTypes($percentile75, $types);

        $this->percentile75 = $percentile75;
    }

}
