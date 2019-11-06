<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicStore";
    }

}
