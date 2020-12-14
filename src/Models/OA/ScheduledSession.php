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
    public static function getType()
    {
        return "ScheduledSession";
    }

    public static function fieldList() {
        $fields = [
            "eventSchedule" => "eventSchedule",
            "subEvent" => "subEvent",
            "superEvent" => "superEvent",
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
     *     ]
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Schedule[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eventSchedule;

    /**
     * Relates a parent event to a child event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A child event might be a specific instance of an Event within a schedule
     *
     *
     * @var \OpenActive\Models\OA\Event[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $subEvent;

    /**
     * Relates a child event to a parent event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A parent event might specify a recurring schedule, of which the child event is one specific instance
     *
     *
     * @var string|\OpenActive\Models\OA\Event
     */
    protected $superEvent;

    /**
     * @return \OpenActive\Models\OA\Schedule[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    /**
     * @param \OpenActive\Models\OA\Schedule[] $eventSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
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
     * @return \OpenActive\Models\OA\Event[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event[] $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setSubEvent($subEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event[]",
        ];

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

    /**
     * @return string|\OpenActive\Models\OA\Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param string|\OpenActive\Models\OA\Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuperEvent($superEvent)
    {
        $types = [
            "string",
            "\OpenActive\Models\OA\Event",
        ];

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
    }

}
