<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RecyclingCenter extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RecyclingCenter";
    }

}
