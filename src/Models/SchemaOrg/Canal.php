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
    public static function getType()
    {
        return "schema:Canal";
    }

}
