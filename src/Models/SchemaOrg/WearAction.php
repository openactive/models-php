<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WearAction extends \OpenActive\Models\SchemaOrg\UseAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WearAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
