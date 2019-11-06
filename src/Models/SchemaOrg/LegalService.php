<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LegalService extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LegalService";
    }

}
