<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExercisePlan extends \OpenActive\Models\SchemaOrg\PhysicalActivity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExercisePlan";
    }

    public static function fieldList() {
        $fields = [
            "restPeriods" => "restPeriods",
            "additionalVariable" => "additionalVariable",
            "intensity" => "intensity",
            "repetitions" => "repetitions",
            "activityDuration" => "activityDuration",
            "workload" => "workload",
            "exerciseType" => "exerciseType",
            "activityFrequency" => "activityFrequency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * How often one should break from the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $restPeriods;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     *
     *
     * @var string
     */
    protected $additionalVariable;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $intensity;

    /**
     * Number of times one should repeat the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $repetitions;

    /**
     * Length of time to engage in the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    protected $activityDuration;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Energy|string
     */
    protected $workload;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     *
     * @var string
     */
    protected $exerciseType;

    /**
     * How often one should engage in the activity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $activityFrequency;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $restPeriods
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRestPeriods($restPeriods)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $restPeriods = self::checkTypes($restPeriods, $types);

        $this->restPeriods = $restPeriods;
    }

    /**
     * @return string
     */
    public function getAdditionalVariable()
    {
        return $this->additionalVariable;
    }

    /**
     * @param string $additionalVariable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalVariable($additionalVariable)
    {
        $types = [
            "string",
        ];

        $additionalVariable = self::checkTypes($additionalVariable, $types);

        $this->additionalVariable = $additionalVariable;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $intensity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIntensity($intensity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $intensity = self::checkTypes($intensity, $types);

        $this->intensity = $intensity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $repetitions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepetitions($repetitions)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $repetitions = self::checkTypes($repetitions, $types);

        $this->repetitions = $repetitions;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null $activityDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivityDuration($activityDuration)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "DateInterval",
            "string",
            "null",
        ];

        $activityDuration = self::checkTypes($activityDuration, $types);

        $this->activityDuration = $activityDuration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Energy|string
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Energy|string $workload
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkload($workload)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Energy",
            "string",
        ];

        $workload = self::checkTypes($workload, $types);

        $this->workload = $workload;
    }

    /**
     * @return string
     */
    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    /**
     * @param string $exerciseType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExerciseType($exerciseType)
    {
        $types = [
            "string",
        ];

        $exerciseType = self::checkTypes($exerciseType, $types);

        $this->exerciseType = $exerciseType;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getActivityFrequency()
    {
        return $this->activityFrequency;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $activityFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivityFrequency($activityFrequency)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $activityFrequency = self::checkTypes($activityFrequency, $types);

        $this->activityFrequency = $activityFrequency;
    }

}
