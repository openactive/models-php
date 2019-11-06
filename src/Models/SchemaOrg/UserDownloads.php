<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserDownloads extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserDownloads";
    }

}
