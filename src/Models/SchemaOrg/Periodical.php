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
    static public function getType()
    {
        return "schema:Periodical";
    }

}
