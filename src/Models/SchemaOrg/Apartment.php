<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Apartment extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     *
     * @var QuantitativeValue
     */
    protected $occupancy;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var QuantitativeValue|decimal|null
     */
    protected $numberOfRooms;

    /**
     * @return QuantitativeValue
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * @param QuantitativeValue $occupancy
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOccupancy($occupancy)
    {
        $types = array(
            "QuantitativeValue",
        );

        $occupancy = self::checkTypes($occupancy, $types);

        $this->occupancy = $occupancy;
    }

    /**
     * @return QuantitativeValue|decimal|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param QuantitativeValue|decimal|null $numberOfRooms
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = array(
            "QuantitativeValue",
            "decimal",
            "null",
        );

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

}
