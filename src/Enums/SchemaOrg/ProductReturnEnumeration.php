<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * ProductReturnEnumeration enumerates several kinds of product return policy. Note that this structure may not capture all aspects of the policy.
 *
 */
class ProductReturnEnumeration
{
    const ProductReturnUnlimitedWindow = \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration\ProductReturnUnlimitedWindow::class;
    const ProductReturnFiniteReturnWindow = \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration\ProductReturnFiniteReturnWindow::class;
    const ProductReturnUnspecified = \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration\ProductReturnUnspecified::class;
    const ProductReturnNotPermitted = \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration\ProductReturnNotPermitted::class;
}
