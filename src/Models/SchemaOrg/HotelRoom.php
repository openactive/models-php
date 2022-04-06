<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HotelRoom extends \OpenActive\Models\SchemaOrg\Room
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HotelRoom";
    }

    public static function fieldList() {
        $fields = [
            "bed" => "bed",
            "occupancy" => "occupancy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BedDetails|string|\OpenActive\Models\SchemaOrg\BedType
     */
    protected $bed;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $occupancy;

    /**
     * @return \OpenActive\Models\SchemaOrg\BedDetails|string|\OpenActive\Models\SchemaOrg\BedType
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BedDetails|string|\OpenActive\Models\SchemaOrg\BedType $bed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBed($bed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BedDetails",
            "string",
            "\OpenActive\Models\SchemaOrg\BedType",
        ];

        $bed = self::checkTypes($bed, $types);

        $this->bed = $bed;
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
