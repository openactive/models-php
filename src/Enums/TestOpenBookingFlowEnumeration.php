<?php

namespace OpenActive\Enums;

/**
 * [NOTICE: This enumeration is part of the Open Booking API Test Interface, and MUST NOT be used in production.]
 * An enumeration of [open booking flow](https://openactive.io/open-booking-api/EditorsDraft/1.0CR3/#booking-flows) that an [Opportunity and Offer pair](https://openactive.io/open-booking-api/EditorsDraft/1.0CR3/#definition-of-a-bookable-opportunity-and-offer-pair) can be booked with.
 *
 */
class TestOpenBookingFlowEnumeration
{
    const OpenBookingSimpleFlow = \OpenActive\Enums\TestOpenBookingFlowEnumeration\OpenBookingSimpleFlow::class;
    const OpenBookingApprovalFlow = \OpenActive\Enums\TestOpenBookingFlowEnumeration\OpenBookingApprovalFlow::class;
}
