<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/OnDemandEvent, which means that any of this type's properties within schema.org may also be used.
 *
 */
class OnDemandEvent extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OnDemandEvent";
    }

    public static function fieldList() {
        $fields = [
            "eventAttendanceMode" => "eventAttendanceMode",
            "eventStatus" => "eventStatus",
            "location" => "location",
            "maximumAttendeeCapacity" => "maximumAttendeeCapacity",
            "maximumVirtualAttendeeCapacity" => "maximumVirtualAttendeeCapacity",
            "meetingPoint" => "meetingPoint",
            "remainingAttendeeCapacity" => "remainingAttendeeCapacity",
            "schedulingNote" => "schedulingNote",
            "startDate" => "startDate",
            "endDate" => "endDate",
            "subEvent" => "subEvent",
            "superEvent" => "superEvent",
            "workFeatured" => "workFeatured",
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
     * The status of an event. Can be used to indicate rescheduled or cancelled events
     *
     * ```json
     * "eventStatus": "https://schema.org/EventScheduled"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eventStatus;

    /**
     * The location at which the event will take place. Or, in the case of events that may span multiple locations, the initial meeting or starting point.
     * Locations must be specified as a [Place](/models/place) complete with a fully described geographic location and/or address.
     *
     * ```json
     * "location": {
     *   "@type": "Place",
     *   "@id": "https://example.com/locations/1234ABCD",
     *   "identifier": "1234ABCD",
     *   "address": {
     *     "addressLocality": "New Malden",
     *     "addressRegion": "London",
     *     "postalCode": "NW5 3DU",
     *     "streetAddress": "Raynes Park High School, 46A West Barnes Lane",
     *     "@type": "PostalAddress"
     *   },
     *   "description": "Raynes Park High School in London",
     *   "geo": {
     *     "latitude": 51.4034423828125,
     *     "longitude": -0.2369088977575302,
     *     "@type": "GeoCoordinates"
     *   },
     *   "name": "Raynes Park High School",
     *   "telephone": "01253 473934"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Place|string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $location;

    /**
     * The maximum capacity of the Event.
     *
     * ```json
     * "maximumAttendeeCapacity": 30
     * ```
     *
     * @var int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $maximumAttendeeCapacity;

    /**
     * Indicates the maximum number of connections to a shared virtual space.
     *
     * ```json
     * "maximumVirtualAttendeeCapacity": 20
     * ```
     *
     * @var int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $maximumVirtualAttendeeCapacity;

    /**
     * Instructions for the attendees of an Event about where they should meet the organizer or leader at the start of the event. Some larger locations may have several possible meeting points, so this property provides additional more specific directions.
     *
     * ```json
     * "meetingPoint": "At the entrance to the park"
     * ```
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $meetingPoint;

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
     * Provides a note from an organizer relating to how this Event is scheduled.
     *
     * ```json
     * "schedulingNote": "This event doesn't run during school holidays"
     * ```
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $schedulingNote;

    /**
     * The start date and time of the event. Can be specified as a schema:DateTime.
     *
     * ```json
     * "startDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $startDate;

    /**
     * The end date and time of the event. Can be specified as a schema:DateTime
     * It is recommended that publishers provide either an schema:endDate or a schema:duration for an event.
     *
     * ```json
     * "endDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $endDate;

    /**
     * Relates a parent event to a child event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A child event might be a specific instance of an Event within a schedule
     *
     *
     * @var \OpenActive\Models\OA\Event[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $subEvent;

    /**
     * Relates an `OnDemandEvent` to an `EventSeries`.
     *
     *
     * @var \OpenActive\Models\OA\Event
     */
    protected $superEvent;

    /**
     * A video, audio or other media that represents the actual recording of the `OnDemandEvent`.
     *
     * ```json
     * "workFeatured": {
     *   "@type": "VideoObject",
     *   "url": "https://www.youtube.com/watch?v=3fbCs0GVjgQ",
     *   "embedUrl": "https://www.youtube.com/embed/3fbCs0GVjgQ",
     *   "thumbnail": [
     *     {
     *       "@type": "ImageObject",
     *       "url": "http://example.com/static/image/speedball_thumbnail.jpg"
     *     }
     *   ]
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\MediaObject
     */
    protected $workFeatured;

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
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration",
            "null",
        ];

        $eventAttendanceMode = self::checkTypes($eventAttendanceMode, $types);

        $this->eventAttendanceMode = $eventAttendanceMode;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventStatusType|null $eventStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setEventStatus($eventStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "null",
        ];

        $eventStatus = self::checkTypes($eventStatus, $types);

        $this->eventStatus = $eventStatus;
    }

    /**
     * @return \OpenActive\Models\OA\Place|string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \OpenActive\Models\OA\Place|string $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setLocation($location)
    {
        $types = [
            "\OpenActive\Models\OA\Place",
            "string",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getMaximumAttendeeCapacity()
    {
        return $this->maximumAttendeeCapacity;
    }

    /**
     * @param int|null $maximumAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $maximumAttendeeCapacity = self::checkTypes($maximumAttendeeCapacity, $types);

        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }

    /**
     * @return int|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getMaximumVirtualAttendeeCapacity()
    {
        return $this->maximumVirtualAttendeeCapacity;
    }

    /**
     * @param int|null $maximumVirtualAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setMaximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $maximumVirtualAttendeeCapacity = self::checkTypes($maximumVirtualAttendeeCapacity, $types);

        $this->maximumVirtualAttendeeCapacity = $maximumVirtualAttendeeCapacity;
    }

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getMeetingPoint()
    {
        return $this->meetingPoint;
    }

    /**
     * @param string $meetingPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setMeetingPoint($meetingPoint)
    {
        $types = [
            "string",
        ];

        $meetingPoint = self::checkTypes($meetingPoint, $types);

        $this->meetingPoint = $meetingPoint;
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
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getSchedulingNote()
    {
        return $this->schedulingNote;
    }

    /**
     * @param string $schedulingNote
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setSchedulingNote($schedulingNote)
    {
        $types = [
            "string",
        ];

        $schedulingNote = self::checkTypes($schedulingNote, $types);

        $this->schedulingNote = $schedulingNote;
    }

    /**
     * @return DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
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
     * @return \OpenActive\Models\OA\Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuperEvent($superEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event",
        ];

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
    }

    /**
     * @return \OpenActive\Models\OA\MediaObject
     */
    public function getWorkFeatured()
    {
        return $this->workFeatured;
    }

    /**
     * @param \OpenActive\Models\OA\MediaObject $workFeatured
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkFeatured($workFeatured)
    {
        $types = [
            "\OpenActive\Models\OA\MediaObject",
        ];

        $workFeatured = self::checkTypes($workFeatured, $types);

        $this->workFeatured = $workFeatured;
    }

}
