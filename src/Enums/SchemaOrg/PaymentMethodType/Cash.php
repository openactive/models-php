<?php

namespace OpenActive\Enums\SchemaOrg\PaymentMethodType;

/**
 * The type of payment method, only for generic payment types, specific forms of payments, like card payment should be expressed using subclasses of PaymentMethod.
 *
 */
class Cash extends \OpenActive\Enums\SchemaOrg\PaymentMethodType
{
    const value = "Cash";
    const memberVal = "https://schema.org/Cash";
}
