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
            "petsAllowed" => "petsAllowed",
            "tourBookingPage" => "tourBookingPage",
            "numberOfAvailableAccommodationUnits" => "numberOfAvailableAccommodationUnits",
            "numberOfAccommodationUnits" => "numberOfAccommodationUnits",
            "numberOfBedrooms" => "numberOfBedrooms",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     *
     * @var null|string|bool
     */
    protected $petsAllowed;

    /**
     * A page providing information on how to book a tour of some <a class="localLink" href="https://schema.org/Place">Place</a>, such as an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a> or <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a> in a real estate setting, as well as other kinds of tours as appropriate.
     *
     *
     * @var string
     */
    protected $tourBookingPage;

    /**
     * Indicates the number of available accommodation units in an <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="https://schema.org/numberOfAccommodationUnits">numberOfAccommodationUnits</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfAvailableAccommodationUnits;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="https://schema.org/numberOfAvailableAccommodationUnits">numberOfAvailableAccommodationUnits</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfAccommodationUnits;

    /**
     * The total integer number of bedrooms in a some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a> or <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a>.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfBedrooms;

    /**
     * @return null|string|bool
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }

    /**
     * @param null|string|bool $petsAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPetsAllowed($petsAllowed)
    {
        $types = array(
            "null",
            "string",
            "bool",
        );

        $petsAllowed = self::checkTypes($petsAllowed, $types);

        $this->petsAllowed = $petsAllowed;
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
        $types = array(
            "string",
        );

        $tourBookingPage = self::checkTypes($tourBookingPage, $types);

        $this->tourBookingPage = $tourBookingPage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getNumberOfAvailableAccommodationUnits()
    {
        return $this->numberOfAvailableAccommodationUnits;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $numberOfAvailableAccommodationUnits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $numberOfAvailableAccommodationUnits = self::checkTypes($numberOfAvailableAccommodationUnits, $types);

        $this->numberOfAvailableAccommodationUnits = $numberOfAvailableAccommodationUnits;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getNumberOfAccommodationUnits()
    {
        return $this->numberOfAccommodationUnits;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $numberOfAccommodationUnits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAccommodationUnits($numberOfAccommodationUnits)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $numberOfAccommodationUnits = self::checkTypes($numberOfAccommodationUnits, $types);

        $this->numberOfAccommodationUnits = $numberOfAccommodationUnits;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfBedrooms()
    {
        return $this->numberOfBedrooms;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfBedrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBedrooms($numberOfBedrooms)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numberOfBedrooms = self::checkTypes($numberOfBedrooms, $types);

        $this->numberOfBedrooms = $numberOfBedrooms;
    }

}
