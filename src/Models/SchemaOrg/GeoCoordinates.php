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
            "elevation" => "elevation",
            "postalCode" => "postalCode",
            "addressCountry" => "addressCountry",
            "longitude" => "longitude",
            "latitude" => "latitude",
            "address" => "address",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     *
     *
     * @var string|float|null
     */
    protected $elevation;

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $addressCountry;

    /**
     * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var float|string|null
     */
    protected $longitude;

    /**
     * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var string|float|null
     */
    protected $latitude;

    /**
     * Physical address of the item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $address;

    /**
     * @return string|float|null
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param string|float|null $elevation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setElevation($elevation)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $elevation = self::checkTypes($elevation, $types);

        $this->elevation = $elevation;
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
        $types = array(
            "string",
        );

        $postalCode = self::checkTypes($postalCode, $types);

        $this->postalCode = $postalCode;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        );

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
    }

    /**
     * @return float|string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float|string|null $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = array(
            "float",
            "string",
            "null",
        );

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

    /**
     * @return string|float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string|float|null $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

}
