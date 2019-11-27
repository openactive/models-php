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
            "repeatFrequency" => "repeatFrequency",
            "exceptDate" => "exceptDate",
            "byMonthDay" => "byMonthDay",
            "byMonth" => "byMonth",
            "repeatCount" => "repeatCount",
            "eventSchedule" => "eventSchedule",
            "byDay" => "byDay",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Defines the frequency at which <a class="localLink" href="https://schema.org/Events">Events</a> will occur according to a schedule <a class="localLink" href="https://schema.org/Schedule">Schedule</a>. The intervals between
     *       events should be defined as a <a class="localLink" href="https://schema.org/Duration">Duration</a> of time.
     *
     *
     * @var string|DateInterval|null
     */
    protected $repeatFrequency;

    /**
     * Defines a <a class="localLink" href="https://schema.org/Date">Date</a> or <a class="localLink" href="https://schema.org/DateTime">DateTime</a> during which a scheduled <a class="localLink" href="https://schema.org/Event">Event</a> will not take place. The property allows exceptions to
     *       a <a class="localLink" href="https://schema.org/Schedule">Schedule</a> to be specified. If an exception is specified as a <a class="localLink" href="https://schema.org/DateTime">DateTime</a> then only the event that would have started at that specific date and time
     *       should be excluded from the schedule. If an exception is specified as a <a class="localLink" href="https://schema.org/Date">Date</a> then any event that is scheduled for that 24 hour period should be
     *       excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
     *
     *
     * @var DateTime|null
     */
    protected $exceptDate;

    /**
     * Defines the day(s) of the month on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="https://schema.org/Integer">Integer</a> between 1-31.
     *
     *
     * @var int|null
     */
    protected $byMonthDay;

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
     * Associates an <a class="localLink" href="https://schema.org/Event">Event</a> with a <a class="localLink" href="https://schema.org/Schedule">Schedule</a>. There are circumstances where it is preferable to share a schedule for a series of
     *       repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
     *       gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An <a class="localLink" href="https://schema.org/Event">Event</a> that
     *       is associated with a <a class="localLink" href="https://schema.org/Schedule">Schedule</a> using this property should not have <a class="localLink" href="https://schema.org/startDate">startDate</a> or <a class="localLink" href="https://schema.org/endDate">endDate</a> properties. These are instead defined within the associated
     *       <a class="localLink" href="https://schema.org/Schedule">Schedule</a>, this avoids any ambiguity for clients using the data. The propery might have repeated values to specify different schedules, e.g. for different months
     *       or seasons.
     *
     *
     * @var DateInterval|null
     */
    protected $eventSchedule;

    /**
     * Defines the day(s) of the week on which a recurring <a class="localLink" href="https://schema.org/Event">Event</a> takes place
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    protected $byDay;

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

    /**
     * @return DateTime|null
     */
    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    /**
     * @param DateTime|null $exceptDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExceptDate($exceptDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $exceptDate = self::checkTypes($exceptDate, $types);

        $this->exceptDate = $exceptDate;
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
     * @return DateInterval|null
     */
    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    /**
     * @param DateInterval|null $eventSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventSchedule($eventSchedule)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $eventSchedule = self::checkTypes($eventSchedule, $types);

        $this->eventSchedule = $eventSchedule;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    public function getByDay()
    {
        return $this->byDay;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|null $byDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByDay($byDay)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "null",
        );

        $byDay = self::checkTypes($byDay, $types);

        $this->byDay = $byDay;
    }

}
