<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderItemStatus
{
    const SellerCancelled = \OpenActive\Enums\OA\OrderItemStatus\SellerCancelled::class;
    const CustomerCancelled = \OpenActive\Enums\OA\OrderItemStatus\CustomerCancelled::class;
    const OrderProposed = \OpenActive\Enums\OA\OrderItemStatus\OrderProposed::class;
    const OrderConfirmed = \OpenActive\Enums\OA\OrderItemStatus\OrderConfirmed::class;
    const CustomerAttended = \OpenActive\Enums\OA\OrderItemStatus\CustomerAttended::class;
}
