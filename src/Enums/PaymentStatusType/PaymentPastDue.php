<?php

namespace OpenActive\Enums\PaymentStatusType;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentPastDue extends \OpenActive\Enums\PaymentStatusType
{
    const value = "PaymentPastDue";
    const memberVal = "https://schema.org/PaymentPastDue";
}
