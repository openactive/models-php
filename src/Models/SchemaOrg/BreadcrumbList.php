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

}
