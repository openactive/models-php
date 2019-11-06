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
    public static function getType()
    {
        return "schema:TrainReservation";
    }

}
