<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrawAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrawAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
