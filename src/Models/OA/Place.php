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

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "address" => "address",
            "amenityFeature" => "amenityFeature",
            "containedInPlace" => "containedInPlace",
            "containsPlace" => "containsPlace",
            "geo" => "geo",
            "image" => "image",
            "openingHoursSpecification" => "openingHoursSpecification",
            "telephone" => "telephone",
            "url" => "url",
            "formattedDescription" => "beta:formattedDescription",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
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
     * @var string|\OpenActive\Models\OA\PostalAddress
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
     *     "@type": "ChangingFacilities"
     *   },
     *   {
     *     "name": "Showers",
     *     "value": false,
     *     "@type": "Showers"
     *   },
     *   {
     *     "name": "Lockers",
     *     "value": true,
     *     "@type": "Lockers"
     *   },
     *   {
     *     "name": "Towels",
     *     "value": false,
     *     "@type": "Towels"
     *   },
     *   {
     *     "name": "Creche",
     *     "value": false,
     *     "@type": "Creche"
     *   },
     *   {
     *     "name": "Parking",
     *     "value": true,
     *     "@type": "Parking"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\LocationFeatureSpecification[]
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
     * @var \OpenActive\Models\OA\Place
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
     * @var \OpenActive\Models\OA\Place[]
     */
    protected $containsPlace;

    /**
     * The geo coordinates of the Place.
     *
     * ```json
     * "geo": {
     *   "latitude": 51.4034423828125,
     *   "longitude": -0.2369088977575302,
     *   "@type": "GeoCoordinates"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\GeoCoordinates
     */
    protected $geo;

    /**
     * An image or photo that depicts the place, e.g. a photo taken at a previous event.
     *
     * ```json
     * "image": [
     *   {
     *     "thumbnail": "http://example.com/static/image/speedball_thumbnail.jpg",
     *     "@type": "ImageObject",
     *     "url": "http://example.com/static/image/speedball_large.jpg"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $image;

    /**
     * The times the Place is open
     *
     *
     * @var \OpenActive\Models\OA\OpeningHoursSpecification[]
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
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * Sometimes a description is stored with formatting (e.g. href, bold, italics, embedded YouTube videos). This formatting can be useful for data consumers.
     * 
     * If you are using this property, please join the discussion at proposal [#2](https://github.com/openactive/ns-beta/issues/2).
     *
     *
     * @var string
     */
    protected $formattedDescription;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
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
     * @return string|\OpenActive\Models\OA\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|\OpenActive\Models\OA\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "string",
            "\OpenActive\Models\OA\PostalAddress",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return \OpenActive\Models\OA\LocationFeatureSpecification[]
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param \OpenActive\Models\OA\LocationFeatureSpecification[] $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = array(
            "\OpenActive\Models\OA\LocationFeatureSpecification[]",
        );

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return \OpenActive\Models\OA\Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param \OpenActive\Models\OA\Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = array(
            "\OpenActive\Models\OA\Place",
        );

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

    /**
     * @return \OpenActive\Models\OA\Place[]
     */
    public function getContainsPlace()
    {
        return $this->containsPlace;
    }

    /**
     * @param \OpenActive\Models\OA\Place[] $containsPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsPlace($containsPlace)
    {
        $types = array(
            "\OpenActive\Models\OA\Place[]",
        );

        $containsPlace = self::checkTypes($containsPlace, $types);

        $this->containsPlace = $containsPlace;
    }

    /**
     * @return \OpenActive\Models\OA\GeoCoordinates
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param \OpenActive\Models\OA\GeoCoordinates $geo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeo($geo)
    {
        $types = array(
            "\OpenActive\Models\OA\GeoCoordinates",
        );

        $geo = self::checkTypes($geo, $types);

        $this->geo = $geo;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject[] $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = array(
            "\OpenActive\Models\OA\ImageObject[]",
        );

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return \OpenActive\Models\OA\OpeningHoursSpecification[]
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param \OpenActive\Models\OA\OpeningHoursSpecification[] $openingHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $types = array(
            "\OpenActive\Models\OA\OpeningHoursSpecification[]",
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

    /**
     * @return string
     */
    public function getFormattedDescription()
    {
        return $this->formattedDescription;
    }

    /**
     * @param string $formattedDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFormattedDescription($formattedDescription)
    {
        $types = array(
            "string",
        );

        $formattedDescription = self::checkTypes($formattedDescription, $types);

        $this->formattedDescription = $formattedDescription;
    }

}
