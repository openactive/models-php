<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Place](https://schema.org/Place), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Place extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Place";
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the Place
     *
     * ```json
     * "name": "Raynes Park High School"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The description of the Place
     *
     * ```json
     * "description": "Raynes Park High School in London"
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * A structured PostalAddress object for the Place.
     * Ideally the address should be provided using the PostalAddress structured format. Google Reserve requires https://schema.org/PostalAddress and will not accept plain text addresses.
     *
     * ```json
     * "address": {
     *   "@type": "PostalAddress",
     *   "streetAddress": "Raynes Park High School, 46A West Barnes Lane",
     *   "addressLocality": "New Malden",
     *   "addressRegion": "London",
     *   "postalCode": "NW5 3DU",
     *   "addressCountry": "GB"
     * }
     * ```
     *
     * @var string|PostalAddress
     */
    protected $address;

    /**
     * An array listing the Ammenities of the Place.
     *
     * ```json
     * "amenityFeature": [
     *   {
     *     "name": "Changing Facilities",
     *     "value": true,
     *     "type": "ChangingFacilities"
     *   },
     *   {
     *     "name": "Showers",
     *     "value": false,
     *     "type": "Showers"
     *   },
     *   {
     *     "name": "Lockers",
     *     "value": true,
     *     "type": "Lockers"
     *   },
     *   {
     *     "name": "Towels",
     *     "value": false,
     *     "type": "Towels"
     *   },
     *   {
     *     "name": "Creche",
     *     "value": false,
     *     "type": "Creche"
     *   },
     *   {
     *     "name": "Parking",
     *     "value": true,
     *     "type": "Parking"
     *   }
     * ]
     * ```
     *
     * @var LocationFeatureSpecification[]
     */
    protected $amenityFeature;

    /**
     * The place within which this Place exists
     *
     * ```json
     * "containedInPlace": {
     *   "@type": "Place",
     *   "url": "https://www.everyoneactive.com/centres/Middlesbrough-Sports-Village",
     *   "name": "Middlesbrough Sports Village"
     * }
     * ```
     *
     * @var Place
     */
    protected $containedInPlace;

    /**
     * Places that exist within this place
     *
     * ```json
     * "containsPlace": {
     *   "@type": "Place",
     *   "url": "https://www.everyoneactive.com/centres/Center-Parcs-Sports-Plaza",
     *   "name": "Center Parcs Sports Plaza"
     * }
     * ```
     *
     * @var Place[]
     */
    protected $containsPlace;

    /**
     * The geo coordinates of the Place.
     *
     * ```json
     * "geo": {
     *   "latitude": 51.4034423828125,
     *   "longitude": -0.2369088977575302,
     *   "type": "GeoCoordinates"
     * }
     * ```
     *
     * @var GeoCoordinates
     */
    protected $geo;

    /**
     * An image or photo that depicts the place, e.g. a photo taken at a previous event.
     *
     * ```json
     * "image": [
     *   {
     *     "thumbnail": "http://example.com/static/image/speedball_thumbnail.jpg",
     *     "type": "ImageObject",
     *     "url": "http://example.com/static/image/speedball_large.jpg"
     *   }
     * ]
     * ```
     *
     * @var ImageObject[]
     */
    protected $image;

    /**
     * The times the Place is open
     *
     *
     * @var OpeningHoursSpecification[]
     */
    protected $openingHoursSpecification;

    /**
     * The telephone number for the Place
     *
     * ```json
     * "telephone": "01253 473934"
     * ```
     *
     * @var string
     */
    protected $telephone;

    /**
     * The website for the Place
     *
     * ```json
     * "url": "http://www.rphs.org.uk/"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string|PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "string",
            "PostalAddress",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return LocationFeatureSpecification[]
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param LocationFeatureSpecification[] $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = array(
            "LocationFeatureSpecification[]",
        );

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = array(
            "Place",
        );

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

    /**
     * @return Place[]
     */
    public function getContainsPlace()
    {
        return $this->containsPlace;
    }

    /**
     * @param Place[] $containsPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsPlace($containsPlace)
    {
        $types = array(
            "Place[]",
        );

        $containsPlace = self::checkTypes($containsPlace, $types);

        $this->containsPlace = $containsPlace;
    }

    /**
     * @return GeoCoordinates
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param GeoCoordinates $geo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeo($geo)
    {
        $types = array(
            "GeoCoordinates",
        );

        $geo = self::checkTypes($geo, $types);

        $this->geo = $geo;
    }

    /**
     * @return ImageObject[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param ImageObject[] $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = array(
            "ImageObject[]",
        );

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return OpeningHoursSpecification[]
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param OpeningHoursSpecification[] $openingHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $types = array(
            "OpeningHoursSpecification[]",
        );

        $openingHoursSpecification = self::checkTypes($openingHoursSpecification, $types);

        $this->openingHoursSpecification = $openingHoursSpecification;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTelephone($telephone)
    {
        $types = array(
            "string",
        );

        $telephone = self::checkTypes($telephone, $types);

        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
