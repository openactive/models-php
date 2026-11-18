<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates several kinds of policies for product return fees.
 *
 */
class ReturnFeesEnumeration
{
    const FreeReturn = \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration\FreeReturn::class;
    const OriginalShippingFees = \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration\OriginalShippingFees::class;
    const RestockingFees = \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration\RestockingFees::class;
    const ReturnFeesCustomerResponsibility = \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration\ReturnFeesCustomerResponsibility::class;
    const ReturnShippingFees = \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration\ReturnShippingFees::class;
}
