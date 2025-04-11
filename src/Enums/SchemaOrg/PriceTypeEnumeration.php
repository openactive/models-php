<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates different price types, for example list price, invoice price, and sale price.
 *
 */
class PriceTypeEnumeration
{
    const SalePrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\SalePrice::class;
    const InvoicePrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\InvoicePrice::class;
    const RegularPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\RegularPrice::class;
    const StrikethroughPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\StrikethroughPrice::class;
    const MinimumAdvertisedPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\MinimumAdvertisedPrice::class;
    const SRP = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\SRP::class;
    const ListPrice = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\ListPrice::class;
    const MSRP = \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration\MSRP::class;
}
