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
    static public function getType()
    {
        return "schema:DiscoverAction";
    }

}
