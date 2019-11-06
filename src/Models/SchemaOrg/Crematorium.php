<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Crematorium extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Crematorium";
    }

}
