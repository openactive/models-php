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
    static public function getType()
    {
        return "schema:RadioStation";
    }

}
