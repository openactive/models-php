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
    static public function getType()
    {
        return "schema:GatedResidenceCommunity";
    }

}
