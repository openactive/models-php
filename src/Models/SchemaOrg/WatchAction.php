<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WatchAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WatchAction";
    }

}
