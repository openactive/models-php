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
    static public function getType()
    {
        return "schema:WPHeader";
    }

}
