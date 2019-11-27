<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ApplyAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ApplyAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
