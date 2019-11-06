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
    public static function getType()
    {
        return "schema:AutomatedTeller";
    }

}
