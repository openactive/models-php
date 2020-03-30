<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [EventSeries](https://pending.schema.org/EventSeries), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class EventSeries extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "EventSeries";
    }

    public static function fieldList() {
        $fields = [
            "eventAttendanceMode" => "eventAttendanceMode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     *
     * ```json
     * "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eventAttendanceMode;

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEventAttendanceMode()
    {
        return $this->eventAttendanceMode;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null $eventAttendanceMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setEventAttendanceMode($eventAttendanceMode)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration",
            "null",
        );

        $eventAttendanceMode = self::checkTypes($eventAttendanceMode, $types);

        $this->eventAttendanceMode = $eventAttendanceMode;
    }

}
