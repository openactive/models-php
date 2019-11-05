<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PoliceStation extends \OpenActive\Models\SchemaOrg\EmergencyService
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:PoliceStation";
    }

}
