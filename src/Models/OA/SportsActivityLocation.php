<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/SportsActivityLocation, which means that any of this type's properties within schema.org may also be used.
 *
 */
class SportsActivityLocation extends \OpenActive\Models\OA\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "SportsActivityLocation";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "address" => "address",
            "geo" => "geo",
            "image" => "image",
            "openingHoursSpecification" => "openingHoursSpecification",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the SportsActivityLocation
     *
     * ```json
     * "name": "Basketball Hall"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the SportsActivityLocation, which must not include HTML or other markup.
     *
     * ```json
     * "description": "The National Basketball Performance Centre (NBPC) is part of Belle Vue Sports Village.
     * 
     * - It features a purpose-built hall with 3 courts developed to FIBA standards for international competition and a multi-sports hall with a further 2 basketball courts.
     * - The NBPC show court, which has basketball lines only, also features FIBA scoreboards, 24 second cubes, red LED fitted backboards and Olympic standard portable baskets.
     * 
     * To book a court at the National Basketball Performance Centre, please use the link below or drop in to one of our Pay & Play sessions."
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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $address;

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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $geo;

    /**
     * An image or photo that depicts the specific SportsActivityLocation.
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
     * The times the SportsActivityLocation is open
     *
     *
     * @var \OpenActive\Models\OA\OpeningHoursSpecification[]
     */
    protected $openingHoursSpecification;

    /**
     * A website URL that describes the SportsActivityLocation
     *
     * ```json
     * "url": "https://www.better.org.uk/leisure-centre/manchester/belle-vue-sports-village/facilities"
     * ```
     *
     * @var string
     */
    protected $url;

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string|\OpenActive\Models\OA\PostalAddress
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|\OpenActive\Models\OA\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAddress($address)
    {
        $types = [
            "string",
            "\OpenActive\Models\OA\PostalAddress",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return \OpenActive\Models\OA\GeoCoordinates
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param \OpenActive\Models\OA\GeoCoordinates $geo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setGeo($geo)
    {
        $types = [
            "\OpenActive\Models\OA\GeoCoordinates",
        ];

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
        $types = [
            "\OpenActive\Models\OA\ImageObject[]",
        ];

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
        $types = [
            "\OpenActive\Models\OA\OpeningHoursSpecification[]",
        ];

        $openingHoursSpecification = self::checkTypes($openingHoursSpecification, $types);

        $this->openingHoursSpecification = $openingHoursSpecification;
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
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
