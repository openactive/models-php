<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Pond extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Pond";
    }

}
