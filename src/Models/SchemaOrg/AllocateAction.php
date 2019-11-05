<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AllocateAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AllocateAction";
    }

}
