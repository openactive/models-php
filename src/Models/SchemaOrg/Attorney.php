<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Attorney extends \OpenActive\Models\SchemaOrg\LegalService
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Attorney";
    }

}
