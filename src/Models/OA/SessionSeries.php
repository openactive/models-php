<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
            "remainingAttendeeCapacity" => "remainingAttendeeCapacity",
            "subEvent" => "subEvent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of places that are still available for the Event.
     *
     * ```json
     * "remainingAttendeeCapacity": 20
     * ```
     *
     * @var null|int
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
     * @return null|int
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getRemainingAttendeeCapacity()
    {
        return $this->remainingAttendeeCapacity;
    }

    /**
     * @param null|int $remainingAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        $types = array(
            "null",
            "int",
        );

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
        $types = array(
            "\OpenActive\Models\OA\ScheduledSession[]",
        );

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

}
