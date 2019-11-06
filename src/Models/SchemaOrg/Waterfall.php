<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Waterfall extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Waterfall";
    }

}
