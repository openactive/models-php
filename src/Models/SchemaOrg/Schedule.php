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
     * @var int|null
     */
    protected $byMonth;

    /**
     * Defines the number of times a recurring <a class="localLink" href="https://schema.org/Event">Event</a> will take place
     *
     *
     * @var int|null
     */
    protected $repeatCount;

    /**
     * Defines the day(s) of the week on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. May be specified using either <a class="localLink" href="https://schema.org/DayOfWeek">DayOfWeek</a>, or alternatively <a class="localLink" href="https://schema.org/Text">Text</a> conforming to iCal's syntax for byDay recurrence rules
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|string|null
     */
    protected $byDay;

    /**
     * Defines the day(s) of the month on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="https://schema.org/Integer">Integer</a> between 1-31.
     *
     *
     * @var int|null
     */
    protected $byMonthDay;

    /**
     * Defines a <a class="localLink" href="https://schema.org/Date">Date</a> or <a class="localLink" href="https://schema.org/DateTime">DateTime</a> during which a scheduled <a class="localLink" href="https://schema.org/Event">Event</a> will not take place. The property allows exceptions to
     *       a <a class="localLink" href="https://schema.org/Schedule">Schedule</a> to be specified. If an exception is specified as a <a class="localLink" href="https://schema.org/DateTime">DateTime</a> then only the event that would have started at that specific date and time
     *       should be excluded from the schedule. If an exception is specified as a <a class="localLink" href="https://schema.org/Date">Date</a> then any event that is scheduled for that 24 hour period should be
     *       excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
     *
     *
     * @var DateTime|Date|null
     */
    protected $exceptDate;

    /**
     * Defines the frequency at which <a class="localLink" href="https://schema.org/Events">Events</a> will occur according to a schedule <a class="localLink" href="https://schema.org/Schedule">Schedule</a>. The intervals between
     *       events should be defined as a <a class="localLink" href="https://schema.org/Duration">Duration</a> of time.
     *
     *
     * @var string|DateInterval|null
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
        $types = array(
            "int",
            "null",
        );

        $byMonth = self::checkTypes($byMonth, $types);

        $this->byMonth = $byMonth;
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
        $types = array(
            "int",
            "null",
        );

        $repeatCount = self::checkTypes($repeatCount, $types);

        $this->repeatCount = $repeatCount;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "string",
            "null",
        );

        $byDay = self::checkTypes($byDay, $types);

        $this->byDay = $byDay;
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
        $types = array(
            "int",
            "null",
        );

        $byMonthDay = self::checkTypes($byMonthDay, $types);

        $this->byMonthDay = $byMonthDay;
    }

    /**
     * @return DateTime|Date|null
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param DateTime|Date|null $exceptDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = array(
            "DateTime",
            "Date",
            "null",
        );

        $exceptDate = self::checkTypes($exceptDate, $types);

        $this->exceptDate = $exceptDate;
    }

    /**
     * @return string|DateInterval|null
     */
    public function getRepeatFrequency()
    {
        return $this->repeatFrequency;
    }

    /**
     * @param string|DateInterval|null $repeatFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepeatFrequency($repeatFrequency)
    {
        $types = array(
            "string",
            "DateInterval",
            "null",
        );

        $repeatFrequency = self::checkTypes($repeatFrequency, $types);

        $this->repeatFrequency = $repeatFrequency;
    }

}
