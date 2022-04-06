<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates several kinds of product return policies.
 *
 */
class MerchantReturnEnumeration
{
    const MerchantReturnNotPermitted = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnNotPermitted::class;
    const MerchantReturnUnlimitedWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnlimitedWindow::class;
    const MerchantReturnFiniteReturnWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnFiniteReturnWindow::class;
    const MerchantReturnUnspecified = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnspecified::class;
}
