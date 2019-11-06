<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RejectAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RejectAction";
    }

}
