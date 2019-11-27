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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
