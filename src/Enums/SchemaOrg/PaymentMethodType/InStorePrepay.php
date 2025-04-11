<?php

namespace OpenActive\Enums\SchemaOrg\PaymentMethodType;

/**
 * The type of payment method, only for generic payment types, specific forms of payments, like card payment should be expressed using subclasses of PaymentMethod.
 *
 */
class InStorePrepay extends \OpenActive\Enums\SchemaOrg\PaymentMethodType
{
    const value = "InStorePrepay";
    const memberVal = "https://schema.org/InStorePrepay";
}
