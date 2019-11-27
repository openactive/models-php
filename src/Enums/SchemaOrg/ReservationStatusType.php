<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerated status values for Reservation.
 *
 */
class ReservationStatusType
{
    const ReservationConfirmed = \OpenActive\Enums\SchemaOrg\ReservationStatusType\ReservationConfirmed::class;
    const ReservationPending = \OpenActive\Enums\SchemaOrg\ReservationStatusType\ReservationPending::class;
    const ReservationCancelled = \OpenActive\Enums\SchemaOrg\ReservationStatusType\ReservationCancelled::class;
    const ReservationHold = \OpenActive\Enums\SchemaOrg\ReservationStatusType\ReservationHold::class;
}
