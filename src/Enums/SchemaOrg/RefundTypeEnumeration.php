<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates several kinds of product return refund types.
 *
 */
class RefundTypeEnumeration
{
    const FullRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\FullRefund::class;
    const StoreCreditRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\StoreCreditRefund::class;
    const ExchangeRefund = \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration\ExchangeRefund::class;
}
