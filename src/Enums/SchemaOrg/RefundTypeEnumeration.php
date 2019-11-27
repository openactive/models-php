<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * RefundTypeEnumeration enumerates several kinds of product return refund types.
 *
 */
class RefundTypeEnumeration
{
    const ExchangeRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\ExchangeRefund::class;
    const FullRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\FullRefund::class;
    const StoreCreditRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\StoreCreditRefund::class;
}
