<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AssignAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AssignAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
