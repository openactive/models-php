<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentBuilding extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentBuilding";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
