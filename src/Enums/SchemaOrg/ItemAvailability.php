<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A list of possible product availability options.
 *
 */
class ItemAvailability
{
    const BackOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\BackOrder::class;
    const SoldOut = \OpenActive\Enums\SchemaOrg\ItemAvailability\SoldOut::class;
    const OnlineOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\OnlineOnly::class;
    const MadeToOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\MadeToOrder::class;
    const Reserved = \OpenActive\Enums\SchemaOrg\ItemAvailability\Reserved::class;
    const InStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStock::class;
    const PreSale = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreSale::class;
    const InStoreOnly = \OpenActive\Enums\SchemaOrg\ItemAvailability\InStoreOnly::class;
    const LimitedAvailability = \OpenActive\Enums\SchemaOrg\ItemAvailability\LimitedAvailability::class;
    const OutOfStock = \OpenActive\Enums\SchemaOrg\ItemAvailability\OutOfStock::class;
    const PreOrder = \OpenActive\Enums\SchemaOrg\ItemAvailability\PreOrder::class;
    const Discontinued = \OpenActive\Enums\SchemaOrg\ItemAvailability\Discontinued::class;
}
