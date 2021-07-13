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
    public static function getType()
    {
        return "schema:ReservationPackage";
    }

    public static function fieldList() {
        $fields = [
            "subReservation" => "subReservation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The individual reservations included in the package. Typically a repeated property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Reservation|string
     */
    protected $subReservation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Reservation|string
     */
    public function getSubReservation()
    {
        return $this->subReservation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Reservation|string $subReservation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubReservation($subReservation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Reservation",
            "string",
        ];

        $subReservation = self::checkTypes($subReservation, $types);

        $this->subReservation = $subReservation;
    }

}
