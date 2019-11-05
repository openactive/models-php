<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EmployerAggregateRating extends \OpenActive\Models\SchemaOrg\AggregateRating
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:EmployerAggregateRating";
    }

}
