<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SteeringPositionValue extends \OpenActive\Models\SchemaOrg\QualitativeValue
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:SteeringPositionValue";
    }

}
