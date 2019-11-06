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
    public static function getType()
    {
        return "schema:SteeringPositionValue";
    }

}
