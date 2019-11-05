<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Season extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Season";
    }

}
