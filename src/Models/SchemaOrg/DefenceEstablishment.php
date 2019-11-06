<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefenceEstablishment extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefenceEstablishment";
    }

}
