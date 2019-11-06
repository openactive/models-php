<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TrainStation extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TrainStation";
    }

}
