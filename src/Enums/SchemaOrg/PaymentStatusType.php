<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 */
class PaymentStatusType
{
    const PaymentComplete = \OpenActive\Enums\SchemaOrg\PaymentStatusType\PaymentComplete::class;
    const PaymentPastDue = \OpenActive\Enums\SchemaOrg\PaymentStatusType\PaymentPastDue::class;
    const PaymentDue = \OpenActive\Enums\SchemaOrg\PaymentStatusType\PaymentDue::class;
    const PaymentDeclined = \OpenActive\Enums\SchemaOrg\PaymentStatusType\PaymentDeclined::class;
    const PaymentAutomaticallyApplied = \OpenActive\Enums\SchemaOrg\PaymentStatusType\PaymentAutomaticallyApplied::class;
}
