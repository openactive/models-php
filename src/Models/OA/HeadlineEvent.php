<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class HeadlineEvent extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "HeadlineEvent";
    }

    public static function fieldList() {
        $fields = [
            "eventSchedule" => "eventSchedule",
        ];

        return array_merge(parent::fieldList(), $fields);
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
     * @var \OpenActive\Models\OA\Schedule[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eventSchedule;

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
        $types = array(
            "\OpenActive\Models\OA\Schedule[]",
        );

        $eventSchedule = self::checkTypes($eventSchedule, $types);

        $this->eventSchedule = $eventSchedule;
    }

}
