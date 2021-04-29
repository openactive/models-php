<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Event, which means that any of this type's properties within schema.org may also be used.
 *
 */
class SessionSeries extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "SessionSeries";
    }

    public static function fieldList() {
        $fields = [
            "eventSchedule" => "eventSchedule",
            "remainingAttendeeCapacity" => "remainingAttendeeCapacity",
            "subEvent" => "subEvent",
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
     * The number of places that are still available for the Event.
     *
     * ```json
     * "remainingAttendeeCapacity": 20
     * ```
     *
     * @var int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $remainingAttendeeCapacity;

    /**
     * Relates a parent event to a child event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A child event might be a specific instance of an Event within a schedule
     *
     *
     * @var \OpenActive\Models\OA\ScheduledSession[]
     */
    protected $subEvent;

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
     * @return int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getRemainingAttendeeCapacity()
    {
        return $this->remainingAttendeeCapacity;
    }

    /**
     * @param int|null $remainingAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $remainingAttendeeCapacity = self::checkTypes($remainingAttendeeCapacity, $types);

        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }

    /**
     * @return \OpenActive\Models\OA\ScheduledSession[]
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param \OpenActive\Models\OA\ScheduledSession[] $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubEvent($subEvent)
    {
        $types = [
            "\OpenActive\Models\OA\ScheduledSession[]",
        ];

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

}
