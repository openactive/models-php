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
    static public function getType()
    {
        return "schema:BookSeries";
    }

}
