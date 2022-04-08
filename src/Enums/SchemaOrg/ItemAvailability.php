<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A list of possible product availability options.
 *
 */
class ItemAvailability
{
    const OutOfStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\OutOfStock::class;
    const Discontinued = \OpenActive\Enums\SchemaOrg\ItemAvailability\Discontinued::class;
    const OnlineOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\OnlineOnly::class;
    const InStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStock::class;
    const InStoreOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStoreOnly::class;
    const SoldOut = \OpenActive\Enums\SchemaOrg\ItemAvailability\SoldOut::class;
    const PreSale = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreSale::class;
    const BackOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\BackOrder::class;
    const PreOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreOrder::class;
    const LimitedAvailability = \OpenActive\Enums\SchemaOrg\ItemAvailability\LimitedAvailability::class;
}
