<?php

namespace OpenActive\Enums;

/**
 * [NOTICE: This is a beta enumeration, and is highly likely to change in future versions of this library.]
 * An enumeration of channels through which a booking can be made.
 *
 */
class AvailableChannelType
{
    const TelephoneAdvanceBooking = \OpenActive\Enums\AvailableChannelType\TelephoneAdvanceBooking::class;
    const TelephonePrepayment = \OpenActive\Enums\AvailableChannelType\TelephonePrepayment::class;
    const OnlinePrepayment = \OpenActive\Enums\AvailableChannelType\OnlinePrepayment::class;
    const OpenBookingPrepayment = \OpenActive\Enums\AvailableChannelType\OpenBookingPrepayment::class;
}
