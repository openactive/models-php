<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/CourseInstance, which means that any of this type's properties within schema.org may also be used.
 *
 */
class CourseInstance extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "CourseInstance";
    }

    public static function fieldList() {
        $fields = [
            "eventSchedule" => "eventSchedule",
            "instanceOfCourse" => "instanceOfCourse",
            "startDate" => "startDate",
            "endDate" => "endDate",
            "subEvent" => "subEvent",
            "superEvent" => "superEvent",
            "course" => "beta:course",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A an array of oa:Schedule or oa:PartialSchedule, which represents a recurrence pattern.
     *
     * ```json
     * "eventSchedule": [
     *   {
     *     "@type": "PartialSchedule",
     *     "repeatFrequency": "P1W",
     *     "startTime": "20:15",
     *     "endTime": "20:45",
     *     "byDay": [
     *       "http://schema.org/Tuesday"
     *     ],
     *     "scheduleTimezone": "Europe/London"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Schedule[]
     */
    protected $eventSchedule;

    /**
     * The description of the Course for which this is a distinct instance.
     *
     *
     * @var \OpenActive\Models\OA\Course
     */
    protected $instanceOfCourse;

    /**
     * The start date of this course.
     *
     * ```json
     * "startDate": "2018-01-06"
     * ```
     *
     * @var Date|null
     */
    protected $startDate;

    /**
     * The end date of this course.
     *
     * ```json
     * "endDate": "2018-01-27"
     * ```
     *
     * @var Date|null
     */
    protected $endDate;

    /**
     * The occurrences of this CourseInstance.
     *
     *
     * @var \OpenActive\Models\OA\Event[]
     */
    protected $subEvent;

    /**
     * Relates a child event to a parent event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A parent event might specify a recurring schedule, of which the child event is one specific instance
     *
     *
     * @var \OpenActive\Models\OA\Event
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $superEvent;

    /**
     * [DEPRECATED: This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `instanceOfCourse` instead.]
     * This course for which this is an offering.
     * 
     * If you are using this property, please join the discussion at proposal [#164](https://github.com/openactive/modelling-opportunity-data/issues/164).
     *
     *
     * @var \OpenActive\Models\OA\Course
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `instanceOfCourse` instead.
     */
    protected $course;

    /**
     * @return \OpenActive\Models\OA\Schedule[]
     */
    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    /**
     * @param \OpenActive\Models\OA\Schedule[] $eventSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventSchedule($eventSchedule)
    {
        $types = [
            "\OpenActive\Models\OA\Schedule[]",
        ];

        $eventSchedule = self::checkTypes($eventSchedule, $types);

        $this->eventSchedule = $eventSchedule;
    }

    /**
     * @return \OpenActive\Models\OA\Course
     */
    public function getInstanceOfCourse()
    {
        return $this->instanceOfCourse;
    }

    /**
     * @param \OpenActive\Models\OA\Course $instanceOfCourse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstanceOfCourse($instanceOfCourse)
    {
        $types = [
            "\OpenActive\Models\OA\Course",
        ];

        $instanceOfCourse = self::checkTypes($instanceOfCourse, $types);

        $this->instanceOfCourse = $instanceOfCourse;
    }

    /**
     * @return Date|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return Date|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return \OpenActive\Models\OA\Event[]
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event[] $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubEvent($subEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event[]",
        ];

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

    /**
     * @return \OpenActive\Models\OA\Event
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setSuperEvent($superEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event",
        ];

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
    }

    /**
     * @return \OpenActive\Models\OA\Course
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `instanceOfCourse` instead.
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \OpenActive\Models\OA\Course $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `instanceOfCourse` instead.
     */
    public function setCourse($course)
    {
        $types = [
            "\OpenActive\Models\OA\Course",
        ];

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

}
