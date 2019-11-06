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
    public static function getType()
    {
        return "schema:CancelAction";
    }

}
