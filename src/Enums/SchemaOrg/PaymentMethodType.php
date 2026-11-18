<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The type of payment method, only for generic payment types, specific forms of payments, like card payment should be expressed using subclasses of PaymentMethod.
 *
 */
class PaymentMethodType
{
    const ByBankTransferInAdvance = \OpenActive\Enums\SchemaOrg\PaymentMethodType\ByBankTransferInAdvance::class;
    const ByInvoice = \OpenActive\Enums\SchemaOrg\PaymentMethodType\ByInvoice::class;
    const COD = \OpenActive\Enums\SchemaOrg\PaymentMethodType\COD::class;
    const Cash = \OpenActive\Enums\SchemaOrg\PaymentMethodType\Cash::class;
    const CheckInAdvance = \OpenActive\Enums\SchemaOrg\PaymentMethodType\CheckInAdvance::class;
    const DirectDebit = \OpenActive\Enums\SchemaOrg\PaymentMethodType\DirectDebit::class;
    const InStorePrepay = \OpenActive\Enums\SchemaOrg\PaymentMethodType\InStorePrepay::class;
    const PhoneCarrierPayment = \OpenActive\Enums\SchemaOrg\PaymentMethodType\PhoneCarrierPayment::class;
}
