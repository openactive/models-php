<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AddAction extends \OpenActive\Models\SchemaOrg\UpdateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AddAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
