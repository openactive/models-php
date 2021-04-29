<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RecommendedDoseSchedule extends \OpenActive\Models\SchemaOrg\DoseSchedule
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RecommendedDoseSchedule";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
