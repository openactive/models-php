<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DepartAction extends \OpenActive\Models\SchemaOrg\MoveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DepartAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
