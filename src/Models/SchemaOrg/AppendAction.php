<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AppendAction extends \OpenActive\Models\SchemaOrg\InsertAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AppendAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
