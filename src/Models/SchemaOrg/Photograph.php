<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Photograph extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Photograph";
    }

}
