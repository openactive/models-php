<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Locksmith extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Locksmith";
    }

}
