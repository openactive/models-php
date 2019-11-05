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
    static public function getType()
    {
        return "schema:MusicStore";
    }

}
