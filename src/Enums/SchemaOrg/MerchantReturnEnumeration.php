<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * MerchantReturnEnumeration enumerates several kinds of product return policy. Note that this structure may not capture all aspects of the policy.
 *
 */
class MerchantReturnEnumeration
{
    const MerchantReturnUnspecified = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnspecified::class;
    const MerchantReturnNotPermitted = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnNotPermitted::class;
    const MerchantReturnFiniteReturnWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnFiniteReturnWindow::class;
    const MerchantReturnUnlimitedWindow = \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration\MerchantReturnUnlimitedWindow::class;
}
