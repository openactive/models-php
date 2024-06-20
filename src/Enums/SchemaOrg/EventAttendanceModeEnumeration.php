<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * An EventAttendanceModeEnumeration value is one of potentially several modes of organising an event, relating to whether it is online or offline.
 *
 */
class EventAttendanceModeEnumeration
{
    const OnlineEventAttendanceMode = \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration\OnlineEventAttendanceMode::class;
    const MixedEventAttendanceMode = \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration\MixedEventAttendanceMode::class;
    const OfflineEventAttendanceMode = \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration\OfflineEventAttendanceMode::class;
}
