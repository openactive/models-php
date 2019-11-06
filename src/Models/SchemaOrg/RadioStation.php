<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioStation extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioStation";
    }

}
