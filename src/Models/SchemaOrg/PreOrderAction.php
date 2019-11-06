<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PreOrderAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PreOrderAction";
    }

}
