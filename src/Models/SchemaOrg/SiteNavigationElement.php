<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SiteNavigationElement extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SiteNavigationElement";
    }

}
