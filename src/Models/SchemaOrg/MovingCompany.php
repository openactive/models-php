<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovingCompany extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:MovingCompany";
    }

}
