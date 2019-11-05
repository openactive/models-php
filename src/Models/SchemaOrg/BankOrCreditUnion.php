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
    static public function getType()
    {
        return "schema:BankOrCreditUnion";
    }

}
