<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class QuoteAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:QuoteAction";
    }

}
