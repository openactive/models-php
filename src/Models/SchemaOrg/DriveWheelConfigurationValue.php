<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DriveWheelConfigurationValue extends \OpenActive\Models\SchemaOrg\QualitativeValue
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DriveWheelConfigurationValue";
    }

}
