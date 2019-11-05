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
    static public function getType()
    {
        return "schema:GasStation";
    }

}
