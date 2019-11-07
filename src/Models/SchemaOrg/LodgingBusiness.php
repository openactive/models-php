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

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     *
     * @var QuantitativeValue|float|null
     */
    protected $numberOfRooms;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkoutTime;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating
     */
    protected $starRating;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     *
     * @var LocationFeatureSpecification
     */
    protected $amenityFeature;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $availableLanguage;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     *
     * @var string|bool|null
     */
    protected $petsAllowed;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var string|DateTime|null
     */
    protected $checkinTime;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

    /**
     * @return QuantitativeValue|float|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param QuantitativeValue|float|null $numberOfRooms
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $types = array(
            "QuantitativeValue",
            "float",
            "null",
        );

        $numberOfRooms = self::checkTypes($numberOfRooms, $types);

        $this->numberOfRooms = $numberOfRooms;
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
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $checkoutTime = self::checkTypes($checkoutTime, $types);

        $this->checkoutTime = $checkoutTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating $starRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStarRating($starRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Rating",
        );

        $starRating = self::checkTypes($starRating, $types);

        $this->starRating = $starRating;
    }

    /**
     * @return LocationFeatureSpecification
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param LocationFeatureSpecification $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = array(
            "LocationFeatureSpecification",
        );

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

    /**
     * @return string|bool|null
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }

    /**
     * @param string|bool|null $petsAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPetsAllowed($petsAllowed)
    {
        $types = array(
            "string",
            "bool",
            "null",
        );

        $petsAllowed = self::checkTypes($petsAllowed, $types);

        $this->petsAllowed = $petsAllowed;
    }

    /**
     * @return string|DateTime|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param string|DateTime|null $checkinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckinTime($checkinTime)
    {
        $types = array(
            "Time",
            "DateTime",
            "null",
        );

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

}
