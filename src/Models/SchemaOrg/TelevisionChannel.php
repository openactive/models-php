<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TelevisionChannel extends \OpenActive\Models\SchemaOrg\BroadcastChannel
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:TelevisionChannel";
    }

}
