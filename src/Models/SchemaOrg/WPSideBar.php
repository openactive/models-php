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
    static public function getType()
    {
        return "schema:WPSideBar";
    }

}
