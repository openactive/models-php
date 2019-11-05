<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioChannel extends \OpenActive\Models\SchemaOrg\BroadcastChannel
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:RadioChannel";
    }

}
