<?php

namespace OpenActive\Enums;

/**
 * [NOTICE: This enumeration is part of the Open Booking API Test Interface, and MUST NOT be used in production.]
 * An enumeration of test opportunity criteria to which an opportunity must conform.
 *
 */
class TestOpportunityCriteriaEnumeration
{
    const TestOpportunityBookable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookable::class;
    const TestOpportunityBookableInPast = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableInPast::class;
    const TestOpportunityBookableNoSpaces = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNoSpaces::class;
    const TestOpportunityBookableOneSpace = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableOneSpace::class;
    const TestOpportunityBookableFiveSpaces = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableFiveSpaces::class;
    const TestOpportunityBookableFree = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableFree::class;
    const TestOpportunityBookableNonFree = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFree::class;
    const TestOpportunityBookableUsingPayment = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableUsingPayment::class;
    const TestOpportunityBookableWithinValidFromBeforeStartDate = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableWithinValidFromBeforeStartDate::class;
    const TestOpportunityBookableOutsideValidFromBeforeStartDate = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableOutsideValidFromBeforeStartDate::class;
    const TestOpportunityBookableCancellable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableCancellable::class;
    const TestOpportunityBookableNotCancellable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNotCancellable::class;
    const TestOpportunityBookableCancellableWithinWindow = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableCancellableWithinWindow::class;
    const TestOpportunityBookableCancellableOutsideWindow = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableCancellableOutsideWindow::class;
    const TestOpportunityBookableWithinValidFromBeforeStartDateWindow = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableWithinValidFromBeforeStartDateWindow::class;
    const TestOpportunityBookableOutsideValidFromBeforeStartDateWindow = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableOutsideValidFromBeforeStartDateWindow::class;
    const TestOpportunityBookableAttendeeDetails = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableAttendeeDetails::class;
    const TestOpportunityBookableAdditionalDetails = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableAdditionalDetails::class;
    const TestOpportunityBookableFreePrepaymentOptional = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableFreePrepaymentOptional::class;
    const TestOpportunityBookableNonFreePrepaymentOptional = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFreePrepaymentOptional::class;
    const TestOpportunityBookableNonFreePrepaymentUnavailable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFreePrepaymentUnavailable::class;
    const TestOpportunityBookableFreePrepaymentRequired = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableFreePrepaymentRequired::class;
    const TestOpportunityBookableNonFreePrepaymentRequired = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFreePrepaymentRequired::class;
    const TestOpportunityBookableNonFreeTaxGross = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFreeTaxGross::class;
    const TestOpportunityBookableNonFreeTaxNet = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableNonFreeTaxNet::class;
    const TestOpportunityBookableSellerTermsOfService = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableSellerTermsOfService::class;
    const TestOpportunityOnlineBookable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityOnlineBookable::class;
    const TestOpportunityOfflineBookable = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityOfflineBookable::class;
    const TestOpportunityBookableWithNegotiation = \OpenActive\Enums\TestOpportunityCriteriaEnumeration\TestOpportunityBookableWithNegotiation::class;
}
