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
    public static function getType()
    {
        return "schema:ScheduleAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
