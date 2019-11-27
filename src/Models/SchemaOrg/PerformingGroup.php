<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PerformingGroup extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PerformingGroup";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
