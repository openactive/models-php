<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PaymentService extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentService";
    }

}
