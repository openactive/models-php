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
    static public function getType()
    {
        return "schema:WatchAction";
    }

}
