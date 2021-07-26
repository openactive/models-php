<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A list of possible product availability options.
 *
 */
class ItemAvailability
{
    const InStoreOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStoreOnly::class;
    const OnlineOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\OnlineOnly::class;
    const BackOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\BackOrder::class;
    const OutOfStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\OutOfStock::class;
    const LimitedAvailability = \OpenActive\Enums\SchemaOrg\ItemAvailability\LimitedAvailability::class;
    const PreSale = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreSale::class;
    const PreOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreOrder::class;
    const InStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStock::class;
    const Discontinued = \OpenActive\Enums\SchemaOrg\ItemAvailability\Discontinued::class;
    const SoldOut = \OpenActive\Enums\SchemaOrg\ItemAvailability\SoldOut::class;
}
