<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Sculpture extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Sculpture";
    }

}
