<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ArriveAction extends \OpenActive\Models\SchemaOrg\MoveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ArriveAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
