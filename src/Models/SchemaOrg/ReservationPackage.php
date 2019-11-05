<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReservationPackage extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ReservationPackage";
    }

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
