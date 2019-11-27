<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AllocateAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AllocateAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
