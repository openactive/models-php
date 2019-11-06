<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AssignAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AssignAction";
    }

}
