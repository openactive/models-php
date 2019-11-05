<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TrainReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:TrainReservation";
    }

}
