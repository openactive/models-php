<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WorkersUnion extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WorkersUnion";
    }

}
