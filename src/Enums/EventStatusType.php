<?php

namespace OpenActive\Enums;

/**
 * EventStatusType is an enumeration type whose instances represent several states that an Event may be in.
 *
 */
class EventStatusType
{
    const EventPostponed = \OpenActive\Enums\OA\EventStatusType\EventPostponed::class;
    const EventRescheduled = \OpenActive\Enums\OA\EventStatusType\EventRescheduled::class;
    const EventScheduled = \OpenActive\Enums\OA\EventStatusType\EventScheduled::class;
    const EventCancelled = \OpenActive\Enums\OA\EventStatusType\EventCancelled::class;
}
