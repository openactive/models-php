<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Motel extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Motel";
    }

}
