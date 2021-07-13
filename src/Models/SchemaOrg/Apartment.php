<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Apartment extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Apartment";
    }

    public static function fieldList() {
        $fields = [
            "numberOfRooms" => "numberOfRooms",
            "occupancy" => "occupancy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $numberOfRooms;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $occupancy;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $occupancy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupancy($occupancy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $occupancy = self::checkTypes($occupancy, $types);

        $this->occupancy = $occupancy;
    }

}
