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
    static public function getType()
    {
        return "schema:PreOrderAction";
    }

}
