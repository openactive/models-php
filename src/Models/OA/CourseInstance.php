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
            "startDate" => "startDate",
            "endDate" => "endDate",
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
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * This course for which this is an offering.
     * 
     * If you are using this property, please join the discussion at proposal [#164](https://github.com/openactive/modelling-opportunity-data/issues/164).
     *
     *
     * @var \OpenActive\Models\Course
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
     * @return \OpenActive\Models\Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \OpenActive\Models\Course $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourse($course)
    {
        $types = [
            "\OpenActive\Models\Course",
        ];

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

}
