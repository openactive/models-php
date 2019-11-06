<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BankOrCreditUnion extends \OpenActive\Models\SchemaOrg\FinancialService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BankOrCreditUnion";
    }

}
