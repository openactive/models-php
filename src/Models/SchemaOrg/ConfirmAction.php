<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ConfirmAction extends \OpenActive\Models\SchemaOrg\InformAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ConfirmAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
