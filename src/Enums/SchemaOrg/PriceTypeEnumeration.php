<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates different price types, for example list price, invoice price, and sale price.
 *
 */
class PriceTypeEnumeration
{
    const InvoicePrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\InvoicePrice::class;
    const ListPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\ListPrice::class;
    const MSRP = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\MSRP::class;
    const MaximumRetailPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\MaximumRetailPrice::class;
    const MinimumAdvertisedPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\MinimumAdvertisedPrice::class;
    const RegularPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\RegularPrice::class;
    const SRP = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\SRP::class;
    const SalePrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\SalePrice::class;
    const StrikethroughPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\StrikethroughPrice::class;
}
