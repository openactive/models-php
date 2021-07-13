<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LodgingBusiness extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LodgingBusiness";
    }

    public static function fieldList() {
        $fields = [
            "amenityFeature" => "amenityFeature",
            "numberOfRooms" => "numberOfRooms",
            "starRating" => "starRating",
            "checkinTime" => "checkinTime",
            "petsAllowed" => "petsAllowed",
            "audience" => "audience",
            "availableLanguage" => "availableLanguage",
            "checkoutTime" => "checkoutTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $starRating;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkinTime;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     *
     * @var bool|string|null
     */
    protected $petsAllowed;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $audience;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $availableLanguage;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkoutTime;

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
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $starRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStarRating($starRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $starRating = self::checkTypes($starRating, $types);

        $this->starRating = $starRating;
    }

    /**
     * @return DateTime|string|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param DateTime|string|null $checkinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckinTime($checkinTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
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
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

    /**
     * @return DateTime|string|null
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * @param DateTime|string|null $checkoutTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckoutTime($checkoutTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $checkoutTime = self::checkTypes($checkoutTime, $types);

        $this->checkoutTime = $checkoutTime;
    }

}
