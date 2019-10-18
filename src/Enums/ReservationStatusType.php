<?php

namespace OpenActive\Enums;

/**
 * Enumerated status values for Reservation.
 *
 */
class ReservationStatusType
{
    const ReservationConfirmed = \OpenActive\Enums\OA\ReservationStatusType\ReservationConfirmed::class;
    const ReservationPending = \OpenActive\Enums\OA\ReservationStatusType\ReservationPending::class;
    const ReservationCancelled = \OpenActive\Enums\OA\ReservationStatusType\ReservationCancelled::class;
    const ReservationHold = \OpenActive\Enums\OA\ReservationStatusType\ReservationHold::class;
}
