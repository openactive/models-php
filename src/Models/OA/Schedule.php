<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Schedule](https://pending.schema.org/Schedule), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Schedule extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Schedule";
    }

    public static function fieldList() {
        $fields = [
            "byDay" => "byDay",
            "byMonth" => "byMonth",
            "byMonthDay" => "byMonthDay",
            "duration" => "duration",
            "endTime" => "endTime",
            "exceptDate" => "exceptDate",
            "idTemplate" => "idTemplate",
            "repeatCount" => "repeatCount",
            "repeatFrequency" => "repeatFrequency",
            "scheduledEventType" => "scheduledEventType",
            "scheduleTimezone" => "scheduleTimezone",
            "startDate" => "startDate",
            "endDate" => "endDate",
            "startTime" => "startTime",
            "urlTemplate" => "urlTemplate",
            "timeZone" => "beta:timeZone",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Defines the day of the week upon which the Event takes place.
     * When using string values, this MUST conform to iCal BYDAY rule.
     *
     * ```json
     * "byDay": [
     *   "https://schema.org/Monday"
     * ]
     * ```
     *
     * @var string[]|\OpenActive\Enums\SchemaOrg\DayOfWeek[]|null
     */
    protected $byDay;

    /**
     * Defines the months of the year on which the Event takes place. Specified as an integer between 1 and 12, with 1 representing January.
     *
     * ```json
     * "byMonth": [
     *   2
     * ]
     * ```
     *
     * @var int[]|null
     */
    protected $byMonth;

    /**
     * Defines the days of the month on which the Event takes place. Specified as an integer between 1 and 31
     *
     * ```json
     * "byMonthDay": [
     *   28
     * ]
     * ```
     *
     * @var int[]|null
     */
    protected $byMonthDay;

    /**
     * The duration of the event given in [ISO8601] format.
     *
     * ```json
     * "duration": "PT1H"
     * ```
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The end time of the event.
     *
     * ```json
     * "endTime": "12:00:00"
     * ```
     *
     * @var string|null
     */
    protected $endTime;

    /**
     * Exception dates where the schedule should not generate an event.
     *
     * ```json
     * "exceptDate": [
     *   "2016-04-13T17:10:00Z",
     *   "2016-09-14T17:10:00Z",
     *   "2016-12-14T18:10:00Z",
     *   "2016-12-21T18:10:00Z",
     *   "2016-12-28T18:10:00Z",
     *   "2017-01-04T18:10:00Z"
     * ]
     * ```
     *
     * @var Date[]|DateTime[]|null
     */
    protected $exceptDate;

    /**
     * An RFC6570 compliant URI template that can be used to generate a unique identifier (`@id`) for every event described by the schedule (see below for more information). This property is required if the data provider is supporting third-party booking via the Open Booking API.
     *
     * ```json
     * "idTemplate": "https://example.com/event{/id}"
     * ```
     *
     * @var string
     */
    protected $idTemplate;

    /**
     * Defines the number of times a recurring Event will take place.
     *
     * ```json
     * "repeatCount": 3
     * ```
     *
     * @var int|null
     */
    protected $repeatCount;

    /**
     * Defines the frequency at which Events will occur according to a Schedule. The intervals between events should be defined as a Duration of time.
     *
     * ```json
     * "repeatFrequency": "P1D"
     * ```
     *
     * @var DateInterval|null
     */
    protected $repeatFrequency;

    /**
     * The type of event this schedule related to.
     *
     * ```json
     * "scheduledEventType": "Event"
     * ```
     *
     * @var string
     */
    protected $scheduledEventType;

    /**
     * Indicates the timezone for which the time(s) indicated in the Schedule are given. The value provided should be among those listed in the IANA Time Zone Database.
     *
     * ```json
     * "scheduleTimezone": "Europe/London"
     * ```
     *
     * @var string
     */
    protected $scheduleTimezone;

    /**
     * The start date of the event.
     *
     * ```json
     * "startDate": "2018-01-27"
     * ```
     *
     * @var Date|null
     */
    protected $startDate;

    /**
     * The end date of the schedule.
     *
     * ```json
     * "endDate": "2018-01-27"
     * ```
     *
     * @var Date|null
     */
    protected $endDate;

    /**
     * The start time of the event.
     *
     * ```json
     * "startTime": "12:00:00"
     * ```
     *
     * @var string|null
     */
    protected $startTime;

    /**
     * An RFC6570 compliant URI template that can be used to generate a unique URL (schema:url) for every event described by the schedule (see below for more information). This property is required if the data provider wants to provide participants with a unique URL to book to attend an event.
     *
     * ```json
     * "urlTemplate": "https://example.com/event{/id}"
     * ```
     *
     * @var string
     */
    protected $urlTemplate;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * [DEPRECATED: This beta property is now deprecated, please use `schema:scheduleTimezone` instead.] The time zone used to generate occurrences, same as iCal TZID. E.g. 'Europe/London'.
     * 
     * If you are using this property, please join the discussion at proposal [#197](https://github.com/openactive/modelling-opportunity-data/issues/197).
     *
     *
     * @var string
     */
    protected $timeZone;

    /**
     * @return string[]|\OpenActive\Enums\SchemaOrg\DayOfWeek[]|null
     */
    public function getByDay()
    {
        return $this->byDay;
    }

    /**
     * @param string[]|\OpenActive\Enums\SchemaOrg\DayOfWeek[]|null $byDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByDay($byDay)
    {
        $types = [
            "string[]",
            "\OpenActive\Enums\SchemaOrg\DayOfWeek[]",
            "null",
        ];

        $byDay = self::checkTypes($byDay, $types);

        $this->byDay = $byDay;
    }

    /**
     * @return int[]|null
     */
    public function getByMonth()
    {
        return $this->byMonth;
    }

    /**
     * @param int[]|null $byMonth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonth($byMonth)
    {
        $types = [
            "int[]",
            "null",
        ];

        $byMonth = self::checkTypes($byMonth, $types);

        $this->byMonth = $byMonth;
    }

    /**
     * @return int[]|null
     */
    public function getByMonthDay()
    {
        return $this->byMonthDay;
    }

    /**
     * @param int[]|null $byMonthDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonthDay($byMonthDay)
    {
        $types = [
            "int[]",
            "null",
        ];

        $byMonthDay = self::checkTypes($byMonthDay, $types);

        $this->byMonthDay = $byMonthDay;
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
        $types = [
            "DateInterval",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = [
            "Time",
            "null",
        ];

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return Date[]|DateTime[]|null
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param Date[]|DateTime[]|null $exceptDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = [
            "Date[]",
            "DateTime[]",
            "null",
        ];

        $exceptDate = self::checkTypes($exceptDate, $types);

        $this->exceptDate = $exceptDate;
    }

    /**
     * @return string
     */
    public function getIdTemplate()
    {
        return $this->idTemplate;
    }

    /**
     * @param string $idTemplate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdTemplate($idTemplate)
    {
        $types = [
            "string",
        ];

        $idTemplate = self::checkTypes($idTemplate, $types);

        $this->idTemplate = $idTemplate;
    }

    /**
     * @return int|null
     */
    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    /**
     * @param int|null $repeatCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatCount($repeatCount)
    {
        $types = [
            "int",
            "null",
        ];

        $repeatCount = self::checkTypes($repeatCount, $types);

        $this->repeatCount = $repeatCount;
    }

    /**
     * @return DateInterval|null
     */
    public function getRepeatFrequency()
    {
        return $this->repeatFrequency;
    }

    /**
     * @param DateInterval|null $repeatFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatFrequency($repeatFrequency)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $repeatFrequency = self::checkTypes($repeatFrequency, $types);

        $this->repeatFrequency = $repeatFrequency;
    }

    /**
     * @return string
     */
    public function getScheduledEventType()
    {
        return $this->scheduledEventType;
    }

    /**
     * @param string $scheduledEventType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScheduledEventType($scheduledEventType)
    {
        $types = [
            "string",
        ];

        $scheduledEventType = self::checkTypes($scheduledEventType, $types);

        $this->scheduledEventType = $scheduledEventType;
    }

    /**
     * @return string
     */
    public function getScheduleTimezone()
    {
        return $this->scheduleTimezone;
    }

    /**
     * @param string $scheduleTimezone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScheduleTimezone($scheduleTimezone)
    {
        $types = [
            "string",
        ];

        $scheduleTimezone = self::checkTypes($scheduleTimezone, $types);

        $this->scheduleTimezone = $scheduleTimezone;
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
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = [
            "Time",
            "null",
        ];

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getUrlTemplate()
    {
        return $this->urlTemplate;
    }

    /**
     * @param string $urlTemplate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrlTemplate($urlTemplate)
    {
        $types = [
            "string",
        ];

        $urlTemplate = self::checkTypes($urlTemplate, $types);

        $this->urlTemplate = $urlTemplate;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeZone($timeZone)
    {
        $types = [
            "string",
        ];

        $timeZone = self::checkTypes($timeZone, $types);

        $this->timeZone = $timeZone;
    }

}
