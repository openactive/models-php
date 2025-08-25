<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates different price components that together make up the total price for an offered product.
 *
 */
class PriceComponentTypeEnumeration
{
    const ActivationFee = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\ActivationFee::class;
    const Subscription = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\Subscription::class;
    const Downpayment = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\Downpayment::class;
    const Installment = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\Installment::class;
    const DistanceFee = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\DistanceFee::class;
    const CleaningFee = \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration\CleaningFee::class;
}
