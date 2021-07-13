<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExerciseAction extends \OpenActive\Models\SchemaOrg\PlayAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExerciseAction";
    }

    public static function fieldList() {
        $fields = [
            "exercisePlan" => "exercisePlan",
            "distance" => "distance",
            "diet" => "diet",
            "opponent" => "opponent",
            "fromLocation" => "fromLocation",
            "sportsActivityLocation" => "sportsActivityLocation",
            "exerciseRelatedDiet" => "exerciseRelatedDiet",
            "exerciseType" => "exerciseType",
            "toLocation" => "toLocation",
            "sportsEvent" => "sportsEvent",
            "course" => "course",
            "exerciseCourse" => "exerciseCourse",
            "sportsTeam" => "sportsTeam",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ExercisePlan|string
     */
    protected $exercisePlan;

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $distance;

    /**
     * A sub property of instrument. The diet used in this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Diet|string
     */
    protected $diet;

    /**
     * A sub property of participant. The opponent on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $opponent;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $fromLocation;

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsActivityLocation|string
     */
    protected $sportsActivityLocation;

    /**
     * A sub property of instrument. The diet used in this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Diet|string
     */
    protected $exerciseRelatedDiet;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     *
     * @var string
     */
    protected $exerciseType;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $toLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsEvent|string
     */
    protected $sportsEvent;

    /**
     * A sub property of location. The course where this action was taken.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $course;

    /**
     * A sub property of location. The course where this action was taken.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $exerciseCourse;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|string
     */
    protected $sportsTeam;

    /**
     * @return \OpenActive\Models\SchemaOrg\ExercisePlan|string
     */
    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ExercisePlan|string $exercisePlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExercisePlan($exercisePlan)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ExercisePlan",
            "string",
        ];

        $exercisePlan = self::checkTypes($exercisePlan, $types);

        $this->exercisePlan = $exercisePlan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|string $distance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistance($distance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $distance = self::checkTypes($distance, $types);

        $this->distance = $distance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Diet|string
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Diet|string $diet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiet($diet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Diet",
            "string",
        ];

        $diet = self::checkTypes($diet, $types);

        $this->diet = $diet;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $opponent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpponent($opponent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $opponent = self::checkTypes($opponent, $types);

        $this->opponent = $opponent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $fromLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFromLocation($fromLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $fromLocation = self::checkTypes($fromLocation, $types);

        $this->fromLocation = $fromLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsActivityLocation|string
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsActivityLocation|string $sportsActivityLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsActivityLocation",
            "string",
        ];

        $sportsActivityLocation = self::checkTypes($sportsActivityLocation, $types);

        $this->sportsActivityLocation = $sportsActivityLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Diet|string
     */
    public function getExerciseRelatedDiet()
    {
        return $this->exerciseRelatedDiet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Diet|string $exerciseRelatedDiet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExerciseRelatedDiet($exerciseRelatedDiet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Diet",
            "string",
        ];

        $exerciseRelatedDiet = self::checkTypes($exerciseRelatedDiet, $types);

        $this->exerciseRelatedDiet = $exerciseRelatedDiet;
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
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsEvent|string
     */
    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsEvent|string $sportsEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsEvent($sportsEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsEvent",
            "string",
        ];

        $sportsEvent = self::checkTypes($sportsEvent, $types);

        $this->sportsEvent = $sportsEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourse($course)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getExerciseCourse()
    {
        return $this->exerciseCourse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $exerciseCourse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExerciseCourse($exerciseCourse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $exerciseCourse = self::checkTypes($exerciseCourse, $types);

        $this->exerciseCourse = $exerciseCourse;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|string
     */
    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|string $sportsTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsTeam($sportsTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "string",
        ];

        $sportsTeam = self::checkTypes($sportsTeam, $types);

        $this->sportsTeam = $sportsTeam;
    }

}
