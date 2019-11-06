<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PostOffice extends \OpenActive\Models\SchemaOrg\GovernmentOffice
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PostOffice";
    }

}
