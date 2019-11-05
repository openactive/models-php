<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Room extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Room";
    }

}
