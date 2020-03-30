<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Accommodation extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Accommodation";
    }

    public static function fieldList() {
        $fields = [
            "petsAllowed" => "petsAllowed",
            "amenityFeature" => "amenityFeature",
            "floorSize" => "floorSize",
            "numberOfRooms" => "numberOfRooms",
            "permittedUsage" => "permittedUsage",
            "floorLevel" => "floorLevel",
            "tourBookingPage" => "tourBookingPage",
            "leaseLength" => "leaseLength",
            "numberOfPartialBathrooms" => "numberOfPartialBathrooms",
            "yearBuilt" => "yearBuilt",
            "accommodationFloorPlan" => "accommodationFloorPlan",
            "numberOfBedrooms" => "numberOfBedrooms",
            "numberOfBathroomsTotal" => "numberOfBathroomsTotal",
            "numberOfFullBathrooms" => "numberOfFullBathrooms",
            "accommodationCategory" => "accommodationCategory",
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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
     */
    protected $amenityFeature;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $floorSize;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfRooms;

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     *
     * @var string
     */
    protected $permittedUsage;

    /**
     * The floor level for an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a> in a multi-storey building. Since counting
     *   systems <a href="https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations">vary internationally</a>, the local system should be used where possible.
     *
     *
     * @var string
     */
    protected $floorLevel;

    /**
     * A page providing information on how to book a tour of some <a class="localLink" href="https://schema.org/Place">Place</a>, such as an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a> or <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a> in a real estate setting, as well as other kinds of tours as appropriate.
     *
     *
     * @var string
     */
    protected $tourBookingPage;

    /**
     * Length of the lease for some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, either particular to some <a class="localLink" href="https://schema.org/Offer">Offer</a> or in some cases intrinsic to the property.
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $leaseLength;

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field">BathroomsPartial field in RESO</a>.
     *
     *
     * @var null|float
     */
    protected $numberOfPartialBathrooms;

    /**
     * The year an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a> was constructed. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/YearBuilt+Field">YearBuilt field in RESO</a>.
     *
     *
     * @var null|float
     */
    protected $yearBuilt;

    /**
     * A floorplan of some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FloorPlan
     */
    protected $accommodationFloorPlan;

    /**
     * The total integer number of bedrooms in a some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, <a class="localLink" href="https://schema.org/ApartmentComplex">ApartmentComplex</a> or <a class="localLink" href="https://schema.org/FloorPlan">FloorPlan</a>.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfBedrooms;

    /**
     * The total integer number of bathrooms in a some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, following real estate conventions as <a href="https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field">documented in RESO</a>: "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also <a class="localLink" href="https://schema.org/numberOfRooms">numberOfRooms</a>.
     *
     *
     * @var null|int
     */
    protected $numberOfBathroomsTotal;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field">BathroomsFull field in RESO</a>.
     *
     *
     * @var null|float
     */
    protected $numberOfFullBathrooms;

    /**
     * Category of an <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, following real estate conventions e.g. RESO (see <a href="https://ddwiki.reso.org/display/DDW17/PropertySubType+Field">PropertySubType</a>, and <a href="https://ddwiki.reso.org/display/DDW17/PropertyType+Field">PropertyType</a> fields  for suggested values).
     *
     *
     * @var string
     */
    protected $accommodationCategory;

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
     * @return \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LocationFeatureSpecification $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\LocationFeatureSpecification",
        );

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getFloorSize()
    {
        return $this->floorSize;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $floorSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorSize($floorSize)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $floorSize = self::checkTypes($floorSize, $types);

        $this->floorSize = $floorSize;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * @return string
     */
    public function getPermittedUsage()
    {
        return $this->permittedUsage;
    }

    /**
     * @param string $permittedUsage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermittedUsage($permittedUsage)
    {
        $types = array(
            "string",
        );

        $permittedUsage = self::checkTypes($permittedUsage, $types);

        $this->permittedUsage = $permittedUsage;
    }

    /**
     * @return string
     */
    public function getFloorLevel()
    {
        return $this->floorLevel;
    }

    /**
     * @param string $floorLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorLevel($floorLevel)
    {
        $types = array(
            "string",
        );

        $floorLevel = self::checkTypes($floorLevel, $types);

        $this->floorLevel = $floorLevel;
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
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $leaseLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseLength($leaseLength)
    {
        $types = array(
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $leaseLength = self::checkTypes($leaseLength, $types);

        $this->leaseLength = $leaseLength;
    }

    /**
     * @return null|float
     */
    public function getNumberOfPartialBathrooms()
    {
        return $this->numberOfPartialBathrooms;
    }

    /**
     * @param null|float $numberOfPartialBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPartialBathrooms($numberOfPartialBathrooms)
    {
        $types = array(
            "null",
            "float",
        );

        $numberOfPartialBathrooms = self::checkTypes($numberOfPartialBathrooms, $types);

        $this->numberOfPartialBathrooms = $numberOfPartialBathrooms;
    }

    /**
     * @return null|float
     */
    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }

    /**
     * @param null|float $yearBuilt
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYearBuilt($yearBuilt)
    {
        $types = array(
            "null",
            "float",
        );

        $yearBuilt = self::checkTypes($yearBuilt, $types);

        $this->yearBuilt = $yearBuilt;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\FloorPlan
     */
    public function getAccommodationFloorPlan()
    {
        return $this->accommodationFloorPlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FloorPlan $accommodationFloorPlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccommodationFloorPlan($accommodationFloorPlan)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\FloorPlan",
        );

        $accommodationFloorPlan = self::checkTypes($accommodationFloorPlan, $types);

        $this->accommodationFloorPlan = $accommodationFloorPlan;
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

    /**
     * @return null|int
     */
    public function getNumberOfBathroomsTotal()
    {
        return $this->numberOfBathroomsTotal;
    }

    /**
     * @param null|int $numberOfBathroomsTotal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBathroomsTotal($numberOfBathroomsTotal)
    {
        $types = array(
            "null",
            "int",
        );

        $numberOfBathroomsTotal = self::checkTypes($numberOfBathroomsTotal, $types);

        $this->numberOfBathroomsTotal = $numberOfBathroomsTotal;
    }

    /**
     * @return null|float
     */
    public function getNumberOfFullBathrooms()
    {
        return $this->numberOfFullBathrooms;
    }

    /**
     * @param null|float $numberOfFullBathrooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfFullBathrooms($numberOfFullBathrooms)
    {
        $types = array(
            "null",
            "float",
        );

        $numberOfFullBathrooms = self::checkTypes($numberOfFullBathrooms, $types);

        $this->numberOfFullBathrooms = $numberOfFullBathrooms;
    }

    /**
     * @return string
     */
    public function getAccommodationCategory()
    {
        return $this->accommodationCategory;
    }

    /**
     * @param string $accommodationCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccommodationCategory($accommodationCategory)
    {
        $types = array(
            "string",
        );

        $accommodationCategory = self::checkTypes($accommodationCategory, $types);

        $this->accommodationCategory = $accommodationCategory;
    }

}
