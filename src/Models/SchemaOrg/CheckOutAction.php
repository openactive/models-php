<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CheckOutAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CheckOutAction";
    }

}
