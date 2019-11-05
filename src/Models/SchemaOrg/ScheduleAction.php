<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ScheduleAction extends \OpenActive\Models\SchemaOrg\PlanAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ScheduleAction";
    }

}
