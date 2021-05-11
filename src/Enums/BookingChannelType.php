<?php

namespace OpenActive\Enums;

/**
 * [NOTICE: This is a beta enumeration, and is highly likely to change in future versions of this library.]
 * An enumeration of booking channels that can exist.
 *
 */
class BookingChannelType
{
    const TelephoneAdvanceBooking = \OpenActive\Enums\BookingChannelType\TelephoneAdvanceBooking::class;
    const TelephonePrepayment = \OpenActive\Enums\BookingChannelType\TelephonePrepayment::class;
    const OnlineAdvanceBooking = \OpenActive\Enums\BookingChannelType\OnlineAdvanceBooking::class;
    const OnlinePrepayment = \OpenActive\Enums\BookingChannelType\OnlinePrepayment::class;
}
