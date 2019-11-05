<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Electrician extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Electrician";
    }

}
