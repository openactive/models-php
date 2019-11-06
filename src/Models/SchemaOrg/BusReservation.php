<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusReservation";
    }

}
