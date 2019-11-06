<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TelevisionStation extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TelevisionStation";
    }

}
