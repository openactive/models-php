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
    public static function getType()
    {
        return "schema:EmployerAggregateRating";
    }

}
