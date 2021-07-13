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
            "numberOfBedrooms" => "numberOfBedrooms",
            "numberOfBathroomsTotal" => "numberOfBathroomsTotal",
            "numberOfPartialBathrooms" => "numberOfPartialBathrooms",
            "layoutImage" => "layoutImage",
            "amenityFeature" => "amenityFeature",
            "numberOfRooms" => "numberOfRooms",
            "numberOfAccommodationUnits" => "numberOfAccommodationUnits",
            "petsAllowed" => "petsAllowed",
            "floorSize" => "floorSize",
            "isPlanForApartment" => "isPlanForApartment",
            "numberOfFullBathrooms" => "numberOfFullBathrooms",
            "numberOfAvailableAccommodationUnits" => "numberOfAvailableAccommodationUnits",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numberOfBedrooms;

    /**
     * The total integer number of bathrooms in a some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also [[numberOfRooms]].
     *
     *
     * @var int|null
     */
    protected $numberOfBathroomsTotal;

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
     *
     *
     * @var Number|null
     */
    protected $numberOfPartialBathrooms;

    /**
     * A schematic image showing the floorplan layout.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $layoutImage;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LocationFeatureSpecification|string
     */
    protected $amenityFeature;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $numberOfRooms;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfAccommodationUnits;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     *
     * @var bool|string|null
     */
    protected $petsAllowed;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $floorSize;

    /**
     * Indicates some accommodation that this floor plan describes.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Accommodation|string
     */
    protected $isPlanForApartment;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     *
     *
     * @var Number|null
     */
    protected $numberOfFullBathrooms;

    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfAvailableAccommodationUnits;

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
        $types = [
            "int",
            "null",
        ];

        $numberOfBathroomsTotal = self::checkTypes($numberOfBathroomsTotal, $types);

        $this->numberOfBathroomsTotal = $numberOfBathroomsTotal;
    }

    /**
     * @return Number|null
     */
    public function getNumberOfPartialBathrooms()
    {
        return $this->numberOfPartialBathrooms;
    }

    /**
     * @param Number|null $numberOfPartialBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPartialBathrooms($numberOfPartialBathrooms)
    {
        $types = [
            "Number",
            "null",
        ];

        $numberOfPartialBathrooms = self::checkTypes($numberOfPartialBathrooms, $types);

        $this->numberOfPartialBathrooms = $numberOfPartialBathrooms;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getLayoutImage()
    {
        return $this->layoutImage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $layoutImage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLayoutImage($layoutImage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $layoutImage = self::checkTypes($layoutImage, $types);

        $this->layoutImage = $layoutImage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LocationFeatureSpecification|string
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LocationFeatureSpecification|string $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LocationFeatureSpecification",
            "string",
        ];

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

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

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getFloorSize()
    {
        return $this->floorSize;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $floorSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorSize($floorSize)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $floorSize = self::checkTypes($floorSize, $types);

        $this->floorSize = $floorSize;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Accommodation|string
     */
    public function getIsPlanForApartment()
    {
        return $this->isPlanForApartment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Accommodation|string $isPlanForApartment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsPlanForApartment($isPlanForApartment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Accommodation",
            "string",
        ];

        $isPlanForApartment = self::checkTypes($isPlanForApartment, $types);

        $this->isPlanForApartment = $isPlanForApartment;
    }

    /**
     * @return Number|null
     */
    public function getNumberOfFullBathrooms()
    {
        return $this->numberOfFullBathrooms;
    }

    /**
     * @param Number|null $numberOfFullBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfFullBathrooms($numberOfFullBathrooms)
    {
        $types = [
            "Number",
            "null",
        ];

        $numberOfFullBathrooms = self::checkTypes($numberOfFullBathrooms, $types);

        $this->numberOfFullBathrooms = $numberOfFullBathrooms;
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

}
