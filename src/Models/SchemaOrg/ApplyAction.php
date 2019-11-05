<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ApplyAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ApplyAction";
    }

}
