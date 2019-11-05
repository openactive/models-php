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
    static public function getType()
    {
        return "schema:QuoteAction";
    }

}
