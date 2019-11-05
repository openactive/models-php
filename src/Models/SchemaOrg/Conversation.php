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
    static public function getType()
    {
        return "schema:Conversation";
    }

}
