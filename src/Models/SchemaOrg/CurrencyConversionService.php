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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
