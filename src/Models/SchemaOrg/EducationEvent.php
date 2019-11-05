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
    static public function getType()
    {
        return "schema:EducationEvent";
    }

}
