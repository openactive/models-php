<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates a purchase type for an item.
 *
 */
class PurchaseType
{
    const PurchaseTypeLease = \OpenActive\Enums\SchemaOrg\PurchaseType\PurchaseTypeLease::class;
    const PurchaseTypeNewPurchase = \OpenActive\Enums\SchemaOrg\PurchaseType\PurchaseTypeNewPurchase::class;
    const PurchaseTypeTradeIn = \OpenActive\Enums\SchemaOrg\PurchaseType\PurchaseTypeTradeIn::class;
    const PurchaseTypeUsedPurchase = \OpenActive\Enums\SchemaOrg\PurchaseType\PurchaseTypeUsedPurchase::class;
}
