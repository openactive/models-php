<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoCoordinates extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeoCoordinates";
    }

    public static function fieldList() {
        $fields = [
            "address" => "address",
            "addressCountry" => "addressCountry",
            "elevation" => "elevation",
            "latitude" => "latitude",
            "longitude" => "longitude",
            "postalCode" => "postalCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Physical address of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $address;

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $addressCountry;

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     *
     *
     * @var string|Number|null
     */
    protected $elevation;

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     *
     * @var string|Number|null
     */
    protected $latitude;

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     *
     * @var string|Number|null
     */
    protected $longitude;

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $addressCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
    }

    /**
     * @return string|Number|null
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param string|Number|null $elevation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setElevation($elevation)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $elevation = self::checkTypes($elevation, $types);

        $this->elevation = $elevation;
    }

    /**
     * @return string|Number|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string|Number|null $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return string|Number|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string|Number|null $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCode($postalCode)
    {
        $types = [
            "string",
        ];

        $postalCode = self::checkTypes($postalCode, $types);

        $this->postalCode = $postalCode;
    }

}
