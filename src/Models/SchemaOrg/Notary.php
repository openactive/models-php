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
    static public function getType()
    {
        return "schema:Notary";
    }

}
