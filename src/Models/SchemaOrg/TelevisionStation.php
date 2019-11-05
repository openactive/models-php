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
    static public function getType()
    {
        return "schema:TelevisionStation";
    }

}
