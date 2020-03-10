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
            "numberOfAvailableAccommodationUnits" => "numberOfAvailableAccommodationUnits",
            "numberOfAccommodationUnits" => "numberOfAccommodationUnits",
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
     * Indicates the total (available plus unavailable) number of accommodation units in an <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="https://schema.org/numberOfAvailableAccommodationUnits">numberOfAvailableAccommodationUnits</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfAccommodationUnits;

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

}
