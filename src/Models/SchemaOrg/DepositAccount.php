<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DepositAccount extends \OpenActive\Models\SchemaOrg\InvestmentOrDeposit
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DepositAccount";
    }

}
