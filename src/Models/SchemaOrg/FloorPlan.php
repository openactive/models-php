<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FloorPlan extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FloorPlan";
    }

    public static function fieldList() {
        $fields = [
            "numberOfAvailableAccommodationUnits" => "numberOfAvailableAccommodationUnits",
            "numberOfBathroomsTotal" => "numberOfBathroomsTotal",
            "numberOfFullBathrooms" => "numberOfFullBathrooms",
            "numberOfAccommodationUnits" => "numberOfAccommodationUnits",
            "isPlanForApartment" => "isPlanForApartment",
            "numberOfPartialBathrooms" => "numberOfPartialBathrooms",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the number of available accommodation units in an <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="https://schema.org/numberOfAccommodationUnits">numberOfAccommodationUnits</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfAvailableAccommodationUnits;

    /**
     * The total integer number of bathrooms in a some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, following real estate conventions as <a href="https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field">documented in RESO</a>: "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also <a class="localLink" href="https://schema.org/numberOfRooms">numberOfRooms</a>.
     *
     *
     * @var int|null
     */
    protected $numberOfBathroomsTotal;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field">BathroomsFull field in RESO</a>.
     *
     *
     * @var float|null
     */
    protected $numberOfFullBathrooms;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="https://schema.org/numberOfAvailableAccommodationUnits">numberOfAvailableAccommodationUnits</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfAccommodationUnits;

    /**
     * Indicates some accommodation that this floor plan describes.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Accommodation
     */
    protected $isPlanForApartment;

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field">BathroomsPartial field in RESO</a>.
     *
     *
     * @var float|null
     */
    protected $numberOfPartialBathrooms;

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
     * @return int|null
     */
    public function getNumberOfBathroomsTotal()
    {
        return $this->numberOfBathroomsTotal;
    }

    /**
     * @param int|null $numberOfBathroomsTotal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBathroomsTotal($numberOfBathroomsTotal)
    {
        $types = array(
            "int",
            "null",
        );

        $numberOfBathroomsTotal = self::checkTypes($numberOfBathroomsTotal, $types);

        $this->numberOfBathroomsTotal = $numberOfBathroomsTotal;
    }

    /**
     * @return float|null
     */
    public function getNumberOfFullBathrooms()
    {
        return $this->numberOfFullBathrooms;
    }

    /**
     * @param float|null $numberOfFullBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfFullBathrooms($numberOfFullBathrooms)
    {
        $types = array(
            "float",
            "null",
        );

        $numberOfFullBathrooms = self::checkTypes($numberOfFullBathrooms, $types);

        $this->numberOfFullBathrooms = $numberOfFullBathrooms;
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
     * @return \OpenActive\Models\SchemaOrg\Accommodation
     */
    public function getIsPlanForApartment()
    {
        return $this->isPlanForApartment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Accommodation $isPlanForApartment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsPlanForApartment($isPlanForApartment)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Accommodation",
        );

        $isPlanForApartment = self::checkTypes($isPlanForApartment, $types);

        $this->isPlanForApartment = $isPlanForApartment;
    }

    /**
     * @return float|null
     */
    public function getNumberOfPartialBathrooms()
    {
        return $this->numberOfPartialBathrooms;
    }

    /**
     * @param float|null $numberOfPartialBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPartialBathrooms($numberOfPartialBathrooms)
    {
        $types = array(
            "float",
            "null",
        );

        $numberOfPartialBathrooms = self::checkTypes($numberOfPartialBathrooms, $types);

        $this->numberOfPartialBathrooms = $numberOfPartialBathrooms;
    }

}
