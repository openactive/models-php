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

    public static function fieldList() {
        $fields = [
            "occupancy" => "occupancy",
            "numberOfRooms" => "numberOfRooms",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $occupancy;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfRooms;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $occupancy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupancy($occupancy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $occupancy = self::checkTypes($occupancy, $types);

        $this->occupancy = $occupancy;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

}
