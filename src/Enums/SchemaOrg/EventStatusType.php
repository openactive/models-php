<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * EventStatusType is an enumeration type whose instances represent several states that an Event may be in.
 *
 */
class EventStatusType
{
    const EventPostponed = \OpenActive\Enums\SchemaOrg\EventStatusType\EventPostponed::class;
    const EventRescheduled = \OpenActive\Enums\SchemaOrg\EventStatusType\EventRescheduled::class;
    const EventScheduled = \OpenActive\Enums\SchemaOrg\EventStatusType\EventScheduled::class;
    const EventCancelled = \OpenActive\Enums\SchemaOrg\EventStatusType\EventCancelled::class;
}
