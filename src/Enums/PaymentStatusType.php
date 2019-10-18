<?php

namespace OpenActive\Enums;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentStatusType
{
    const PaymentComplete = \OpenActive\Enums\OA\PaymentStatusType\PaymentComplete::class;
    const PaymentPastDue = \OpenActive\Enums\OA\PaymentStatusType\PaymentPastDue::class;
    const PaymentDue = \OpenActive\Enums\OA\PaymentStatusType\PaymentDue::class;
    const PaymentDeclined = \OpenActive\Enums\OA\PaymentStatusType\PaymentDeclined::class;
    const PaymentAutomaticallyApplied = \OpenActive\Enums\OA\PaymentStatusType\PaymentAutomaticallyApplied::class;
}
