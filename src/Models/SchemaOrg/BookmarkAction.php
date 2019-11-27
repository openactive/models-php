<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BookmarkAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BookmarkAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
