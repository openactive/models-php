<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates several kinds of product return policies.
 *
 */
class MerchantReturnEnumeration
{
    const MerchantReturnUnspecified = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnspecified::class;
    const MerchantReturnUnlimitedWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnlimitedWindow::class;
    const MerchantReturnNotPermitted = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnNotPermitted::class;
    const MerchantReturnFiniteReturnWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnFiniteReturnWindow::class;
}
