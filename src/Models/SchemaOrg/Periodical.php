<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Periodical extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Periodical";
    }

}
