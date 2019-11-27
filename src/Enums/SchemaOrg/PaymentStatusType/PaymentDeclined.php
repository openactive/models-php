<?php

namespace OpenActive\Enums\SchemaOrg\PaymentStatusType;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentDeclined extends \OpenActive\Enums\SchemaOrg\PaymentStatusType
{
    const value = "PaymentDeclined";
    const memberVal = "https://schema.org/PaymentDeclined";
}
