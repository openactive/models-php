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
    static public function getType()
    {
        return "schema:BreadcrumbList";
    }

}
