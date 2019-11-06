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
    public static function getType()
    {
        return "schema:Electrician";
    }

}
