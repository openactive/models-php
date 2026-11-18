<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The types of expenses that are covered by the incentive. For example some incentives are only for the goods (tangible items) but the services (labor) are excluded.
 *
 */
class IncentiveQualifiedExpenseType
{
    const IncentiveQualifiedExpenseTypeGoodsOnly = \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType\IncentiveQualifiedExpenseTypeGoodsOnly::class;
    const IncentiveQualifiedExpenseTypeGoodsOrServices = \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType\IncentiveQualifiedExpenseTypeGoodsOrServices::class;
    const IncentiveQualifiedExpenseTypeServicesOnly = \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType\IncentiveQualifiedExpenseTypeServicesOnly::class;
    const IncentiveQualifiedExpenseTypeUtilityBill = \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType\IncentiveQualifiedExpenseTypeUtilityBill::class;
}
