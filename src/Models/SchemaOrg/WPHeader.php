<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WPHeader extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WPHeader";
    }

}
