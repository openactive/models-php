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
    static public function getType()
    {
        return "schema:BusReservation";
    }

}
