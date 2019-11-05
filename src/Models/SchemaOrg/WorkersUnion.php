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
    static public function getType()
    {
        return "schema:WorkersUnion";
    }

}
