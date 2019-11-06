<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WPSideBar extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WPSideBar";
    }

}
