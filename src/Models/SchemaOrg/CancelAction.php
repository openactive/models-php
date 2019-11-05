<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CancelAction extends \OpenActive\Models\SchemaOrg\PlanAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:CancelAction";
    }

}
