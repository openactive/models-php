<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MaximumDoseSchedule extends \OpenActive\Models\SchemaOrg\DoseSchedule
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MaximumDoseSchedule";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
