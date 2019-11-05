<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoRental extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AutoRental";
    }

}
