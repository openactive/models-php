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
    static public function getType()
    {
        return "schema:InsuranceAgency";
    }

}
