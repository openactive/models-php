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
    static public function getType()
    {
        return "schema:AssignAction";
    }

}
