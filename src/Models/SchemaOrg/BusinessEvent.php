<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusinessEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BusinessEvent";
    }

}
