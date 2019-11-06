<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GatedResidenceCommunity extends \OpenActive\Models\SchemaOrg\Residence
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GatedResidenceCommunity";
    }

}
