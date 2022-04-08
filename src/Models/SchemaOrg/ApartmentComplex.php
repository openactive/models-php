<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ApartmentComplex extends \OpenActive\Models\SchemaOrg\Residence
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ApartmentComplex";
    }

    public static function fieldList() {
        $fields = [
            "numberOfAccommodationUnits" => "numberOfAccommodationUnits",
            "numberOfAvailableAccommodationUnits" => "numberOfAvailableAccommodationUnits",
            "tourBookingPage" => "tourBookingPage",
            "numberOfBedrooms" => "numberOfBedrooms",
            "petsAllowed" => "petsAllowed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfAccommodationUnits;

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfAvailableAccommodationUnits;

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
     *
     *
     * @var string
     */
    protected $tourBookingPage;

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numberOfBedrooms;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     *
     * @var bool|string|null
     */
    protected $petsAllowed;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumberOfAccommodationUnits()
    {
        return $this->numberOfAccommodationUnits;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numberOfAccommodationUnits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAccommodationUnits($numberOfAccommodationUnits)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numberOfAccommodationUnits = self::checkTypes($numberOfAccommodationUnits, $types);

        $this->numberOfAccommodationUnits = $numberOfAccommodationUnits;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumberOfAvailableAccommodationUnits()
    {
        return $this->numberOfAvailableAccommodationUnits;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numberOfAvailableAccommodationUnits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numberOfAvailableAccommodationUnits = self::checkTypes($numberOfAvailableAccommodationUnits, $types);

        $this->numberOfAvailableAccommodationUnits = $numberOfAvailableAccommodationUnits;
    }

    /**
     * @return string
     */
    public function getTourBookingPage()
    {
        return $this->tourBookingPage;
    }

    /**
     * @param string $tourBookingPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTourBookingPage($tourBookingPage)
    {
        $types = [
            "string",
        ];

        $tourBookingPage = self::checkTypes($tourBookingPage, $types);

        $this->tourBookingPage = $tourBookingPage;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getNumberOfBedrooms()
    {
        return $this->numberOfBedrooms;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $numberOfBedrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBedrooms($numberOfBedrooms)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $numberOfBedrooms = self::checkTypes($numberOfBedrooms, $types);

        $this->numberOfBedrooms = $numberOfBedrooms;
    }

    /**
     * @return bool|string|null
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }

    /**
     * @param bool|string|null $petsAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPetsAllowed($petsAllowed)
    {
        $types = [
            "bool",
            "string",
            "null",
        ];

        $petsAllowed = self::checkTypes($petsAllowed, $types);

        $this->petsAllowed = $petsAllowed;
    }

}
