<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CatholicChurch extends \OpenActive\Models\SchemaOrg\Church
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:CatholicChurch";
    }

}
