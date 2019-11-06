<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Library extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Library";
    }

}
