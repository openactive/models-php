<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserBlocks extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserBlocks";
    }

}
