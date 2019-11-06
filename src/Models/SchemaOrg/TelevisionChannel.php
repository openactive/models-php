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
    public static function getType()
    {
        return "schema:TelevisionChannel";
    }

}
