<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TieAction extends \OpenActive\Models\SchemaOrg\AchieveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TieAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
