<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Notary extends \OpenActive\Models\SchemaOrg\LegalService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Notary";
    }

}
