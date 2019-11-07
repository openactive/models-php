<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class House extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:House";
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

}
