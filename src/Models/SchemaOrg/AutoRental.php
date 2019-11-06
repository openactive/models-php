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
    public static function getType()
    {
        return "schema:AutoRental";
    }

}
