<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DepositAccount extends \OpenActive\Models\SchemaOrg\BankAccount
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DepositAccount";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
