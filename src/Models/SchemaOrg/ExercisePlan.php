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
            "repetitions" => "repetitions",
            "restPeriods" => "restPeriods",
            "intensity" => "intensity",
            "workload" => "workload",
            "additionalVariable" => "additionalVariable",
            "exerciseType" => "exerciseType",
            "activityDuration" => "activityDuration",
            "activityFrequency" => "activityFrequency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Number of times one should repeat the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $repetitions;

    /**
     * How often one should break from the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $restPeriods;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $intensity;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Energy|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $workload;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     *
     *
     * @var string
     */
    protected $additionalVariable;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     *
     * @var string
     */
    protected $exerciseType;

    /**
     * Length of time to engage in the activity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    protected $activityDuration;

    /**
     * How often one should engage in the activity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $activityFrequency;

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
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $intensity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIntensity($intensity)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $intensity = self::checkTypes($intensity, $types);

        $this->intensity = $intensity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Energy|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Energy|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $workload
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkload($workload)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Energy",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $workload = self::checkTypes($workload, $types);

        $this->workload = $workload;
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
