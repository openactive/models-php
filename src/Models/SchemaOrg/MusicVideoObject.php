<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicVideoObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicVideoObject";
    }

}
