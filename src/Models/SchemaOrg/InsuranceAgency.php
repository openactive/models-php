<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InsuranceAgency extends \OpenActive\Models\SchemaOrg\FinancialService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InsuranceAgency";
    }

}
