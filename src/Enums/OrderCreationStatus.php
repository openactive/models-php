<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderCreationStatus
{
    const OrderCreationPaymentAuthorized = \OpenActive\Enums\OrderCreationStatus\OrderCreationPaymentAuthorized::class;
    const OrderCreationPaymentCaptured = \OpenActive\Enums\OrderCreationStatus\OrderCreationPaymentCaptured::class;
    const OrderCreationComplete = \OpenActive\Enums\OrderCreationStatus\OrderCreationComplete::class;
    const OrderCreationPaymentDue = \OpenActive\Enums\OrderCreationStatus\OrderCreationPaymentDue::class;
}
