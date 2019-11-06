<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Conversation extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Conversation";
    }

}
