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
    public static function getType()
    {
        return "schema:BusinessEvent";
    }

}
