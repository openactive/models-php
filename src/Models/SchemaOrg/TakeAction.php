<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TakeAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TakeAction";
    }

}
