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
     * @var string|\OpenActive\Models\SchemaOrg\BedType
     */
    protected $typeOfBed;

    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
     *
     *
     * @var Number|null
     */
    protected $numberOfBeds;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\BedType
     */
    public function getTypeOfBed()
    {
        return $this->typeOfBed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BedType $typeOfBed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfBed($typeOfBed)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\BedType",
        ];

        $typeOfBed = self::checkTypes($typeOfBed, $types);

        $this->typeOfBed = $typeOfBed;
    }

    /**
     * @return Number|null
     */
    public function getNumberOfBeds()
    {
        return $this->numberOfBeds;
    }

    /**
     * @param Number|null $numberOfBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBeds($numberOfBeds)
    {
        $types = [
            "Number",
            "null",
        ];

        $numberOfBeds = self::checkTypes($numberOfBeds, $types);

        $this->numberOfBeds = $numberOfBeds;
    }

}
