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
            "occupancy" => "occupancy",
            "bed" => "bed",
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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails
     */
    protected $bed;

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
     * @return string|\OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BedType|\OpenActive\Models\SchemaOrg\BedDetails $bed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBed($bed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\BedType",
            "\OpenActive\Models\SchemaOrg\BedDetails",
        );

        $bed = self::checkTypes($bed, $types);

        $this->bed = $bed;
    }

}
