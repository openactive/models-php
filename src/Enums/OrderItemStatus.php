<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderItemStatus
{
    const SellerCancelled = \OpenActive\Enums\OrderItemStatus\SellerCancelled::class;
    const CustomerCancelled = \OpenActive\Enums\OrderItemStatus\CustomerCancelled::class;
    const OrderProposed = \OpenActive\Enums\OrderItemStatus\OrderProposed::class;
    const OrderConfirmed = \OpenActive\Enums\OrderItemStatus\OrderConfirmed::class;
    const CustomerAttended = \OpenActive\Enums\OrderItemStatus\CustomerAttended::class;
}
