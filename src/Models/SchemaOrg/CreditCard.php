<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CreditCard extends \OpenActive\Models\SchemaOrg\LoanOrCredit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CreditCard";
    }

}
