<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates common financial incentives for products, including tax credits, tax deductions, rebates and subsidies, etc.
 *
 */
class IncentiveType
{
    const IncentiveTypeLoan = \OpenActive\Enums\SchemaOrg\IncentiveType\IncentiveTypeLoan::class;
    const IncentiveTypeRebateOrSubsidy = \OpenActive\Enums\SchemaOrg\IncentiveType\IncentiveTypeRebateOrSubsidy::class;
    const IncentiveTypeTaxCredit = \OpenActive\Enums\SchemaOrg\IncentiveType\IncentiveTypeTaxCredit::class;
    const IncentiveTypeTaxDeduction = \OpenActive\Enums\SchemaOrg\IncentiveType\IncentiveTypeTaxDeduction::class;
    const IncentiveTypeTaxWaiver = \OpenActive\Enums\SchemaOrg\IncentiveType\IncentiveTypeTaxWaiver::class;
}
