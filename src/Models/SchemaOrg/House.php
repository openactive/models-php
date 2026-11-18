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

    public static function fieldList() {
        $fields = [
            "numberOfRooms" => "numberOfRooms",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numberOfRooms;

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

}
