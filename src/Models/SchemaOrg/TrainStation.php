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
    static public function getType()
    {
        return "schema:TrainStation";
    }

}
