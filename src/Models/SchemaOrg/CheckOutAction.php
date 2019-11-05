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
    static public function getType()
    {
        return "schema:CheckOutAction";
    }

}
