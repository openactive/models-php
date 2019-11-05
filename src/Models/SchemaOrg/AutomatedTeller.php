<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutomatedTeller extends \OpenActive\Models\SchemaOrg\FinancialService
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AutomatedTeller";
    }

}
