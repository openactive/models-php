<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ItemPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ItemPage";
    }

}
