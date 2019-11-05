<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserInteraction extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:UserInteraction";
    }

}
