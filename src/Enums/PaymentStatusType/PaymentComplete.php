<?php

namespace OpenActive\Enums\PaymentStatusType;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentComplete extends \OpenActive\Enums\PaymentStatusType
{
    const value = "PaymentComplete";
    const memberVal = "https://schema.org/PaymentComplete";
}
