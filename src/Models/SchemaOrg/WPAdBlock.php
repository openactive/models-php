<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WPAdBlock extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:WPAdBlock";
    }

}
