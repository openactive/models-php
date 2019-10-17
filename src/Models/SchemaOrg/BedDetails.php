<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class BedDetails extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
     *
     *
     * @var decimal|null
     */
    protected $numberOfBeds;

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BedType
     */
    protected $typeOfBed;

    /**
     * @return decimal|null
     */
    public function getNumberOfBeds()
    {
        return $this->numberOfBeds;
    }

    /**
     * @param decimal|null $numberOfBeds
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNumberOfBeds($numberOfBeds)
    {
        $types = array(
            "decimal",
            "null",
        );

        $numberOfBeds = self::checkTypes($numberOfBeds, $types);

        $this->numberOfBeds = $numberOfBeds;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTypeOfBed($typeOfBed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\BedType",
        );

        $typeOfBed = self::checkTypes($typeOfBed, $types);

        $this->typeOfBed = $typeOfBed;
    }

}
