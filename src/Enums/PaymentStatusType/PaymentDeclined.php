<?php

namespace OpenActive\Enums\PaymentStatusType;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentDeclined extends \OpenActive\Enums\PaymentStatusType
{
    const value = "PaymentDeclined";
    const memberVal = "https://schema.org/PaymentDeclined";
}
