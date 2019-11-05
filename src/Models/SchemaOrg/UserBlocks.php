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
    static public function getType()
    {
        return "schema:UserBlocks";
    }

}
