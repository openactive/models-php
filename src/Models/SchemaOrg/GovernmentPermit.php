<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentPermit extends \OpenActive\Models\SchemaOrg\Permit
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:GovernmentPermit";
    }

}
