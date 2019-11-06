<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EventReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EventReservation";
    }

}
