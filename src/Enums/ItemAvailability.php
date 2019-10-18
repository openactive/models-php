<?php

namespace OpenActive\Enums;

/**
 * A list of possible product availability options.
 *
 */
class ItemAvailability
{
    const SoldOut = \OpenActive\Enums\OA\ItemAvailability\SoldOut::class;
    const PreOrder = \OpenActive\Enums\OA\ItemAvailability\PreOrder::class;
    const OutOfStock = \OpenActive\Enums\OA\ItemAvailability\OutOfStock::class;
    const PreSale = \OpenActive\Enums\OA\ItemAvailability\PreSale::class;
    const InStock = \OpenActive\Enums\OA\ItemAvailability\InStock::class;
    const LimitedAvailability = \OpenActive\Enums\OA\ItemAvailability\LimitedAvailability::class;
    const Discontinued = \OpenActive\Enums\OA\ItemAvailability\Discontinued::class;
    const OnlineOnly = \OpenActive\Enums\OA\ItemAvailability\OnlineOnly::class;
    const InStoreOnly = \OpenActive\Enums\OA\ItemAvailability\InStoreOnly::class;
}
