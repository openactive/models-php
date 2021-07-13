<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderItemStatus
{
    const SellerCancelled = \OpenActive\Enums\OrderItemStatus\SellerCancelled::class;
    const CustomerCancelled = \OpenActive\Enums\OrderItemStatus\CustomerCancelled::class;
    const OrderItemConfirmed = \OpenActive\Enums\OrderItemStatus\OrderItemConfirmed::class;
    const AttendeeAttended = \OpenActive\Enums\OrderItemStatus\AttendeeAttended::class;
    const AttendeeAbsent = \OpenActive\Enums\OrderItemStatus\AttendeeAbsent::class;
}
