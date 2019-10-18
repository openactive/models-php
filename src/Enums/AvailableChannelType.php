<?php

namespace OpenActive\Enums;

/**
 * [NOTICE: This is a beta enumeration, and is highly likely to change in future versions of this library.]
 * An enumeration of channels through which a booking can be made.
 *
 */
class AvailableChannelType
{
    const TelephoneAdvanceBooking = \OpenActive\Enums\OA\AvailableChannelType\TelephoneAdvanceBooking::class;
    const TelephonePrepayment = \OpenActive\Enums\OA\AvailableChannelType\TelephonePrepayment::class;
    const OnlinePrepayment = \OpenActive\Enums\OA\AvailableChannelType\OnlinePrepayment::class;
    const OpenBookingPrepayment = \OpenActive\Enums\OA\AvailableChannelType\OpenBookingPrepayment::class;
}
