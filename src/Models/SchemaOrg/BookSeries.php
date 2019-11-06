<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BookSeries extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BookSeries";
    }

}
