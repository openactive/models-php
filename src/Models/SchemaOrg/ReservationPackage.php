<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class ReservationPackage extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * The individual reservations included in the package. Typically a repeated property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Reservation
     */
    protected $subReservation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Reservation
     */
    public function getSubReservation()
    {
        return $this->subReservation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Reservation $subReservation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSubReservation($subReservation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Reservation",
        );

        $subReservation = self::checkTypes($subReservation, $types);

        $this->subReservation = $subReservation;
    }

}
