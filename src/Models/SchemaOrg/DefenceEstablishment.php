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
    static public function getType()
    {
        return "schema:DefenceEstablishment";
    }

}
