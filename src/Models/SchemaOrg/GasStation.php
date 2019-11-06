<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GasStation extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GasStation";
    }

}
