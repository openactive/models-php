<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InvestmentFund extends \OpenActive\Models\SchemaOrg\InvestmentOrDeposit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InvestmentFund";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
