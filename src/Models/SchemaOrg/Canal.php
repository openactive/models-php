<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Canal extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Canal";
    }

}
