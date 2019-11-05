<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ScheduledSession extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "ScheduledSession";
    }

    /**
     * A an array of oa:Schedule or oa:PartialSchedule, which represents a recurrence pattern.
     *
     * ```json
     * "eventSchedule": [
     *   {
     *     "type": "PartialSchedule",
     *     "repeatFrequency": "P1W",
     *     "startTime": "20:15",
     *     "endTime": "20:45",
     *     "byDay": [
     *       "http://schema.org/Tuesday"
     *     ]
     *   }
     * ]
     * ```
     *
     * @var Schedule[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eventSchedule;

    /**
     * Relates a parent event to a child event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A child event might be a specific instance of an Event within a schedule
     *
     *
     * @var Event[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $subEvent;

    /**
     * Relates a child event to a parent event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A parent event might specify a recurring schedule, of which the child event is one specific instance
     *
     *
     * @var string|Event
     */
    protected $superEvent;

    /**
     * @return Schedule[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    /**
     * @param Schedule[] $eventSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setEventSchedule($eventSchedule)
    {
        $types = array(
            "Schedule[]",
        );

        $eventSchedule = self::checkTypes($eventSchedule, $types);

        $this->eventSchedule = $eventSchedule;
    }

    /**
     * @return Event[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param Event[] $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setSubEvent($subEvent)
    {
        $types = array(
            "Event[]",
        );

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

    /**
     * @return string|Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param string|Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuperEvent($superEvent)
    {
        $types = array(
            "string",
            "Event",
        );

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
    }

}
