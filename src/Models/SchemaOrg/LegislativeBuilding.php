<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LegislativeBuilding extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LegislativeBuilding";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
