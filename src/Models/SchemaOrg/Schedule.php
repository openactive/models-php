<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Schedule extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Schedule";
    }

    public static function fieldList() {
        $fields = [
            "scheduleTimezone" => "scheduleTimezone",
            "startDate" => "startDate",
            "exceptDate" => "exceptDate",
            "startTime" => "startTime",
            "repeatCount" => "repeatCount",
            "endDate" => "endDate",
            "repeatFrequency" => "repeatFrequency",
            "duration" => "duration",
            "byMonthDay" => "byMonthDay",
            "endTime" => "endTime",
            "byMonth" => "byMonth",
            "byDay" => "byDay",
            "byMonthWeek" => "byMonthWeek",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed in the IANA Time Zone Database.
     *
     *
     * @var string
     */
    protected $scheduleTimezone;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $startDate;

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to
     *       a [[Schedule]] to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that specific date and time
     *       should be excluded from the schedule. If an exception is specified as a [[Date]] then any event that is scheduled for that 24 hour period should be
     *       excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
     *
     *
     * @var Date|DateTime|null
     */
    protected $exceptDate;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $startTime;

    /**
     * Defines the number of times a recurring [[Event]] will take place
     *
     *
     * @var int|null
     */
    protected $repeatCount;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between
     *       events should be defined as a [[Duration]] of time.
     *
     *
     * @var DateInterval|string|null
     */
    protected $repeatFrequency;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $duration;

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     *
     *
     * @var int|null
     */
    protected $byMonthDay;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $endTime;

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is 1.
     *
     *
     * @var int|null
     */
    protected $byMonth;

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|string|null
     */
    protected $byDay;

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     *
     *
     * @var int|null
     */
    protected $byMonthWeek;

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
     * @return Date|DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param Date|DateTime|null $exceptDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $exceptDate = self::checkTypes($exceptDate, $types);

        $this->exceptDate = $exceptDate;
    }

    /**
     * @return DateTime|string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|string|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
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
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getRepeatFrequency()
    {
        return $this->repeatFrequency;
    }

    /**
     * @param DateInterval|string|null $repeatFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatFrequency($repeatFrequency)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $repeatFrequency = self::checkTypes($repeatFrequency, $types);

        $this->repeatFrequency = $repeatFrequency;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return int|null
     */
    public function getByMonthDay()
    {
        return $this->byMonthDay;
    }

    /**
     * @param int|null $byMonthDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonthDay($byMonthDay)
    {
        $types = [
            "int",
            "null",
        ];

        $byMonthDay = self::checkTypes($byMonthDay, $types);

        $this->byMonthDay = $byMonthDay;
    }

    /**
     * @return DateTime|string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|string|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return int|null
     */
    public function getByMonth()
    {
        return $this->byMonth;
    }

    /**
     * @param int|null $byMonth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonth($byMonth)
    {
        $types = [
            "int",
            "null",
        ];

        $byMonth = self::checkTypes($byMonth, $types);

        $this->byMonth = $byMonth;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|string|null
     */
    public function getByDay()
    {
        return $this->byDay;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|string|null $byDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByDay($byDay)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "string",
            "null",
        ];

        $byDay = self::checkTypes($byDay, $types);

        $this->byDay = $byDay;
    }

    /**
     * @return int|null
     */
    public function getByMonthWeek()
    {
        return $this->byMonthWeek;
    }

    /**
     * @param int|null $byMonthWeek
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonthWeek($byMonthWeek)
    {
        $types = [
            "int",
            "null",
        ];

        $byMonthWeek = self::checkTypes($byMonthWeek, $types);

        $this->byMonthWeek = $byMonthWeek;
    }

}
