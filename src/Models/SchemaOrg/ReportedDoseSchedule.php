<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReportedDoseSchedule extends \OpenActive\Models\SchemaOrg\DoseSchedule
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReportedDoseSchedule";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
