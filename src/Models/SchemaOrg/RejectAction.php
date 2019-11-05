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
    static public function getType()
    {
        return "schema:RejectAction";
    }

}
