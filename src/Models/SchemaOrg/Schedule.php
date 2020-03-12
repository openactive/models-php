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
            "byMonth" => "byMonth",
            "repeatCount" => "repeatCount",
            "byDay" => "byDay",
            "byMonthDay" => "byMonthDay",
            "exceptDate" => "exceptDate",
            "repeatFrequency" => "repeatFrequency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the <a class="localLink" href="https://schema.org/Schedule">Schedule</a> are given. The value provided should be among those listed in the IANA Time Zone Database.
     *
     *
     * @var string
     */
    protected $scheduleTimezone;

    /**
     * Defines the month(s) of the year on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="https://schema.org/Integer">Integer</a> between 1-12. January is 1.
     *
     *
     * @var null|int
     */
    protected $byMonth;

    /**
     * Defines the number of times a recurring <a class="localLink" href="https://schema.org/Event">Event</a> will take place
     *
     *
     * @var null|int
     */
    protected $repeatCount;

    /**
     * Defines the day(s) of the week on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. May be specified using either <a class="localLink" href="https://schema.org/DayOfWeek">DayOfWeek</a>, or alternatively <a class="localLink" href="https://schema.org/Text">Text</a> conforming to iCal's syntax for byDay recurrence rules
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|null|string
     */
    protected $byDay;

    /**
     * Defines the day(s) of the month on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="https://schema.org/Integer">Integer</a> between 1-31.
     *
     *
     * @var null|int
     */
    protected $byMonthDay;

    /**
     * Defines a <a class="localLink" href="https://schema.org/Date">Date</a> or <a class="localLink" href="https://schema.org/DateTime">DateTime</a> during which a scheduled <a class="localLink" href="https://schema.org/Event">Event</a> will not take place. The property allows exceptions to
     *       a <a class="localLink" href="https://schema.org/Schedule">Schedule</a> to be specified. If an exception is specified as a <a class="localLink" href="https://schema.org/DateTime">DateTime</a> then only the event that would have started at that specific date and time
     *       should be excluded from the schedule. If an exception is specified as a <a class="localLink" href="https://schema.org/Date">Date</a> then any event that is scheduled for that 24 hour period should be
     *       excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
     *
     *
     * @var null|DateTime|Date
     */
    protected $exceptDate;

    /**
     * Defines the frequency at which <a class="localLink" href="https://schema.org/Events">Events</a> will occur according to a schedule <a class="localLink" href="https://schema.org/Schedule">Schedule</a>. The intervals between
     *       events should be defined as a <a class="localLink" href="https://schema.org/Duration">Duration</a> of time.
     *
     *
     * @var null|string|DateInterval
     */
    protected $repeatFrequency;

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
        $types = array(
            "string",
        );

        $scheduleTimezone = self::checkTypes($scheduleTimezone, $types);

        $this->scheduleTimezone = $scheduleTimezone;
    }

    /**
     * @return null|int
     */
    public function getByMonth()
    {
        return $this->byMonth;
    }

    /**
     * @param null|int $byMonth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonth($byMonth)
    {
        $types = array(
            "null",
            "int",
        );

        $byMonth = self::checkTypes($byMonth, $types);

        $this->byMonth = $byMonth;
    }

    /**
     * @return null|int
     */
    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    /**
     * @param null|int $repeatCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatCount($repeatCount)
    {
        $types = array(
            "null",
            "int",
        );

        $repeatCount = self::checkTypes($repeatCount, $types);

        $this->repeatCount = $repeatCount;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|null|string
     */
    public function getByDay()
    {
        return $this->byDay;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|null|string $byDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByDay($byDay)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "null",
            "string",
        );

        $byDay = self::checkTypes($byDay, $types);

        $this->byDay = $byDay;
    }

    /**
     * @return null|int
     */
    public function getByMonthDay()
    {
        return $this->byMonthDay;
    }

    /**
     * @param null|int $byMonthDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByMonthDay($byMonthDay)
    {
        $types = array(
            "null",
            "int",
        );

        $byMonthDay = self::checkTypes($byMonthDay, $types);

        $this->byMonthDay = $byMonthDay;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param null|DateTime|Date $exceptDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $exceptDate = self::checkTypes($exceptDate, $types);

        $this->exceptDate = $exceptDate;
    }

    /**
     * @return null|string|DateInterval
     */
    public function getRepeatFrequency()
    {
        return $this->repeatFrequency;
    }

    /**
     * @param null|string|DateInterval $repeatFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatFrequency($repeatFrequency)
    {
        $types = array(
            "null",
            "string",
            "DateInterval",
        );

        $repeatFrequency = self::checkTypes($repeatFrequency, $types);

        $this->repeatFrequency = $repeatFrequency;
    }

}
