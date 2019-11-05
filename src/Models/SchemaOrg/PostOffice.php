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
    static public function getType()
    {
        return "schema:PostOffice";
    }

}
