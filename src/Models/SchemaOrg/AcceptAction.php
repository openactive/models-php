<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AcceptAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AcceptAction";
    }

}
