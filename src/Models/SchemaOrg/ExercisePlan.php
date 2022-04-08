<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExercisePlan extends \OpenActive\Models\SchemaOrg\CreativeWork
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
            "intensity" => "intensity",
            "workload" => "workload",
            "activityDuration" => "activityDuration",
            "restPeriods" => "restPeriods",
            "activityFrequency" => "activityFrequency",
            "additionalVariable" => "additionalVariable",
            "exerciseType" => "exerciseType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Number of times one should repeat the activity.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $repetitions;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $intensity;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Energy|string
     */
    protected $workload;

    /**
     * Length of time to engage in the activity.
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $activityDuration;

    /**
     * How often one should break from the activity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $restPeriods;

    /**
     * How often one should engage in the activity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $activityFrequency;

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
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $repetitions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepetitions($repetitions)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $repetitions = self::checkTypes($repetitions, $types);

        $this->repetitions = $repetitions;
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
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $activityDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivityDuration($activityDuration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $activityDuration = self::checkTypes($activityDuration, $types);

        $this->activityDuration = $activityDuration;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $restPeriods
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRestPeriods($restPeriods)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $restPeriods = self::checkTypes($restPeriods, $types);

        $this->restPeriods = $restPeriods;
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

}
