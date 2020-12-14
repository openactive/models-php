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
            "sportsActivityLocation" => "sportsActivityLocation",
            "exerciseCourse" => "exerciseCourse",
            "fromLocation" => "fromLocation",
            "sportsEvent" => "sportsEvent",
            "exercisePlan" => "exercisePlan",
            "toLocation" => "toLocation",
            "diet" => "diet",
            "course" => "course",
            "opponent" => "opponent",
            "distance" => "distance",
            "sportsTeam" => "sportsTeam",
            "exerciseRelatedDiet" => "exerciseRelatedDiet",
            "exerciseType" => "exerciseType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsActivityLocation
     */
    protected $sportsActivityLocation;

    /**
     * A sub property of location. The course where this action was taken.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $exerciseCourse;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $fromLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsEvent
     */
    protected $sportsEvent;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ExercisePlan
     */
    protected $exercisePlan;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $toLocation;

    /**
     * A sub property of instrument. The diet used in this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Diet
     */
    protected $diet;

    /**
     * A sub property of location. The course where this action was taken.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $course;

    /**
     * A sub property of participant. The opponent on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $opponent;

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance
     */
    protected $distance;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam
     */
    protected $sportsTeam;

    /**
     * A sub property of instrument. The diet used in this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Diet
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
     * @return \OpenActive\Models\SchemaOrg\SportsActivityLocation
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsActivityLocation $sportsActivityLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsActivityLocation",
        ];

        $sportsActivityLocation = self::checkTypes($sportsActivityLocation, $types);

        $this->sportsActivityLocation = $sportsActivityLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getExerciseCourse()
    {
        return $this->exerciseCourse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $exerciseCourse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExerciseCourse($exerciseCourse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $exerciseCourse = self::checkTypes($exerciseCourse, $types);

        $this->exerciseCourse = $exerciseCourse;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $fromLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFromLocation($fromLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $fromLocation = self::checkTypes($fromLocation, $types);

        $this->fromLocation = $fromLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsEvent
     */
    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsEvent $sportsEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsEvent($sportsEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsEvent",
        ];

        $sportsEvent = self::checkTypes($sportsEvent, $types);

        $this->sportsEvent = $sportsEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ExercisePlan
     */
    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ExercisePlan $exercisePlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExercisePlan($exercisePlan)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ExercisePlan",
        ];

        $exercisePlan = self::checkTypes($exercisePlan, $types);

        $this->exercisePlan = $exercisePlan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Diet
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Diet $diet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiet($diet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Diet",
        ];

        $diet = self::checkTypes($diet, $types);

        $this->diet = $diet;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourse($course)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $opponent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpponent($opponent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $opponent = self::checkTypes($opponent, $types);

        $this->opponent = $opponent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance $distance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistance($distance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
        ];

        $distance = self::checkTypes($distance, $types);

        $this->distance = $distance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam
     */
    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam $sportsTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsTeam($sportsTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsTeam",
        ];

        $sportsTeam = self::checkTypes($sportsTeam, $types);

        $this->sportsTeam = $sportsTeam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Diet
     */
    public function getExerciseRelatedDiet()
    {
        return $this->exerciseRelatedDiet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Diet $exerciseRelatedDiet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExerciseRelatedDiet($exerciseRelatedDiet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Diet",
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

}
