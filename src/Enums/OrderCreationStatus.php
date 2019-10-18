<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderCreationStatus
{
    const OrderCreationPaymentAuthorized = \OpenActive\Enums\OA\OrderCreationStatus\OrderCreationPaymentAuthorized::class;
    const OrderCreationPaymentCaptured = \OpenActive\Enums\OA\OrderCreationStatus\OrderCreationPaymentCaptured::class;
    const OrderCreationComplete = \OpenActive\Enums\OA\OrderCreationStatus\OrderCreationComplete::class;
    const OrderCreationPaymentDue = \OpenActive\Enums\OA\OrderCreationStatus\OrderCreationPaymentDue::class;
}
