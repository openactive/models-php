<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Suite extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Suite";
    }

    public static function fieldList() {
        $fields = [
            "bed" => "bed",
            "occupancy" => "occupancy",
            "numberOfRooms" => "numberOfRooms",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails|string
     */
    protected $bed;

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
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfRooms;

    /**
     * @return \OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails|string
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails|string $bed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBed($bed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BedType",
            "\OpenActive\Models\SchemaOrg\BedDetails",
            "string",
        ];

        $bed = self::checkTypes($bed, $types);

        $this->bed = $bed;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $occupancy = self::checkTypes($occupancy, $types);

        $this->occupancy = $occupancy;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        ];

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

}
