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
    public static function getType()
    {
        return "schema:DepositAccount";
    }

}
