<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Code extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Code";
    }

}
