<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AccountingService extends \OpenActive\Models\SchemaOrg\FinancialService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AccountingService";
    }

}
