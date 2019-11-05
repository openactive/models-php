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
    static public function getType()
    {
        return "schema:CreditCard";
    }

}
