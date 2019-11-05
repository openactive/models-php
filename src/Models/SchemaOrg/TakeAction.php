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
    static public function getType()
    {
        return "schema:TakeAction";
    }

}
