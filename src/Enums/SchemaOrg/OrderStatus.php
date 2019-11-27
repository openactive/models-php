<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerated status values for Order.
 *
 */
class OrderStatus
{
    const OrderReturned = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderReturned::class;
    const OrderProcessing = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderProcessing::class;
    const OrderPickupAvailable = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderPickupAvailable::class;
    const OrderProblem = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderProblem::class;
    const OrderDelivered = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderDelivered::class;
    const OrderInTransit = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderInTransit::class;
    const OrderCancelled = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderCancelled::class;
    const OrderPaymentDue = \OpenActive\Enums\SchemaOrg\OrderStatus\OrderPaymentDue::class;
}
