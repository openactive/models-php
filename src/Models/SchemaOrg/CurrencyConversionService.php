<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CurrencyConversionService extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CurrencyConversionService";
    }

}
