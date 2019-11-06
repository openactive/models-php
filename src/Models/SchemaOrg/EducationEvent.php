<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EducationEvent";
    }

}
