<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BankAccount extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BankAccount";
    }

}
