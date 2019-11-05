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
    static public function getType()
    {
        return "schema:EventReservation";
    }

}
