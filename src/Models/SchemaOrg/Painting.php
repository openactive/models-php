<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Painting extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Painting";
    }

}
