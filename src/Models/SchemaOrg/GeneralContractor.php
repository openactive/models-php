<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeneralContractor extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:GeneralContractor";
    }

}
