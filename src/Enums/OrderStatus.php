<?php

namespace OpenActive\Enums;

/**
 * Enumerated status values for Order.
 *
 */
class OrderStatus
{
    const OrderReturned = \OpenActive\Enums\OA\OrderStatus\OrderReturned::class;
    const OrderProcessing = \OpenActive\Enums\OA\OrderStatus\OrderProcessing::class;
    const OrderPickupAvailable = \OpenActive\Enums\OA\OrderStatus\OrderPickupAvailable::class;
    const OrderProblem = \OpenActive\Enums\OA\OrderStatus\OrderProblem::class;
    const OrderDelivered = \OpenActive\Enums\OA\OrderStatus\OrderDelivered::class;
    const OrderInTransit = \OpenActive\Enums\OA\OrderStatus\OrderInTransit::class;
    const OrderCancelled = \OpenActive\Enums\OA\OrderStatus\OrderCancelled::class;
    const OrderPaymentDue = \OpenActive\Enums\OA\OrderStatus\OrderPaymentDue::class;
}
