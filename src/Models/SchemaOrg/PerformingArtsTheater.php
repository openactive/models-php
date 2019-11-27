<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PerformingArtsTheater extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PerformingArtsTheater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
