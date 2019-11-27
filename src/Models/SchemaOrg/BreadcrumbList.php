<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BreadcrumbList extends \OpenActive\Models\SchemaOrg\ItemList
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BreadcrumbList";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
