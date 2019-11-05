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
    static public function getType()
    {
        return "schema:UserDownloads";
    }

}
