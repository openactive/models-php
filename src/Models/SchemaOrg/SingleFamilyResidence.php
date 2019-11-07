<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SingleFamilyResidence extends \OpenActive\Models\SchemaOrg\House
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SingleFamilyResidence";
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var QuantitativeValue|float|null
     */
    protected $numberOfRooms;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     *
     * @var QuantitativeValue
     */
    protected $occupancy;

    /**
     * @return QuantitativeValue|float|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param QuantitativeValue|float|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = array(
            "QuantitativeValue",
            "float",
            "null",
        );

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupancy($occupancy)
    {
        $types = array(
            "QuantitativeValue",
        );

        $occupancy = self::checkTypes($occupancy, $types);

        $this->occupancy = $occupancy;
    }

}
