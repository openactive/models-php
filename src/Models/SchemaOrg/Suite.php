<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Suite extends \OpenActive\Models\SchemaOrg\Accommodation
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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BedDetails|\OpenActive\Models\SchemaOrg\BedType
     */
    protected $bed;

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
     * @return string|\OpenActive\Models\SchemaOrg\BedDetails|\OpenActive\Models\SchemaOrg\BedType
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BedDetails|\OpenActive\Models\SchemaOrg\BedType $bed
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBed($bed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\BedDetails",
            "\OpenActive\Models\SchemaOrg\BedType",
        );

        $bed = self::checkTypes($bed, $types);

        $this->bed = $bed;
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
