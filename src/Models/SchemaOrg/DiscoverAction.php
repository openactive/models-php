<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DiscoverAction extends \OpenActive\Models\SchemaOrg\FindAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DiscoverAction";
    }

}
