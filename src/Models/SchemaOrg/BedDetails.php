<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BedDetails extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BedDetails";
    }

    public static function fieldList() {
        $fields = [
            "typeOfBed" => "typeOfBed",
            "numberOfBeds" => "numberOfBeds",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BedType|string
     */
    protected $typeOfBed;

    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
     *
     *
     * @var null|float
     */
    protected $numberOfBeds;

    /**
     * @return \OpenActive\Models\SchemaOrg\BedType|string
     */
    public function getTypeOfBed()
    {
        return $this->typeOfBed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BedType|string $typeOfBed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfBed($typeOfBed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BedType",
            "string",
        );

        $typeOfBed = self::checkTypes($typeOfBed, $types);

        $this->typeOfBed = $typeOfBed;
    }

    /**
     * @return null|float
     */
    public function getNumberOfBeds()
    {
        return $this->numberOfBeds;
    }

    /**
     * @param null|float $numberOfBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBeds($numberOfBeds)
    {
        $types = array(
            "null",
            "float",
        );

        $numberOfBeds = self::checkTypes($numberOfBeds, $types);

        $this->numberOfBeds = $numberOfBeds;
    }

}
