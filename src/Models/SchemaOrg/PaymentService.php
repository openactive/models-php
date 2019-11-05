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
    static public function getType()
    {
        return "schema:PaymentService";
    }

}
