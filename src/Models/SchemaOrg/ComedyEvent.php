<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComedyEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ComedyEvent";
    }

}
