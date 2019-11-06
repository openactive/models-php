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
    public static function getType()
    {
        return "schema:Sculpture";
    }

}
