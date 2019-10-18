<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Schedule](https://pending.schema.org/Schedule), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Schedule extends \OpenActive\BaseModel
{
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
     * @var string[]|Schema.NET.DayOfWeek[]|null
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
     * @var DateTime|null
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
     * @var DateTime[]|null
     */
    protected $exceptDate;

    /**
     * An RFC6570 compliant URI template that can be used to generate a unique identifier (@id) for every event described by the schedule (see below for more information). This property is required if the data provider is supporting third-party booking via the Open Booking API.
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
     * The start date of the event.
     *
     * ```json
     * "startDate": "2018-01-27"
     * ```
     *
     * @var DateTime|null
     */
    protected $startDate;

    /**
     * The end date of the schedule.
     *
     * ```json
     * "endDate": "2018-01-27"
     * ```
     *
     * @var DateTime|null
     */
    protected $endDate;

    /**
     * The start time of the event.
     *
     * ```json
     * "startTime": "12:00:00"
     * ```
     *
     * @var DateTime|null
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
     * @return string[]|Schema.NET.DayOfWeek[]|null
     */
    public function getByDay()
    {
        return $this->byDay;
    }

    /**
     * @param string[]|Schema.NET.DayOfWeek[]|null $byDay
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setByDay($byDay)
    {
        $types = array(
            "string[]",
            "Schema.NET.DayOfWeek[]",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setByMonth($byMonth)
    {
        $types = array(
            "int[]",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setByMonthDay($byMonthDay)
    {
        $types = array(
            "int[]",
            "null",
        );

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
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|null $endTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return DateTime[]|null
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param DateTime[]|null $exceptDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = array(
            "DateTime[]",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIdTemplate($idTemplate)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRepeatCount($repeatCount)
    {
        $types = array(
            "int",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRepeatFrequency($repeatFrequency)
    {
        $types = array(
            "DateInterval",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setScheduledEventType($scheduledEventType)
    {
        $types = array(
            "string",
        );

        $scheduledEventType = self::checkTypes($scheduledEventType, $types);

        $this->scheduledEventType = $scheduledEventType;
    }

    /**
     * @return DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $startDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $endDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|null $startTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUrlTemplate($urlTemplate)
    {
        $types = array(
            "string",
        );

        $urlTemplate = self::checkTypes($urlTemplate, $types);

        $this->urlTemplate = $urlTemplate;
    }

}
