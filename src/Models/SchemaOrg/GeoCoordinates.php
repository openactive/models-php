<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoCoordinates extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * Physical address of the item.
     *
     *
     * @var PostalAddress|string
     */
    protected $address;

    /**
     * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var string|decimal|null
     */
    protected $latitude;

    /**
     * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var decimal|string|null
     */
    protected $longitude;

    /**
     * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Country
     */
    protected $addressCountry;

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     *
     *
     * @var decimal|string|null
     */
    protected $elevation;

    /**
     * @return PostalAddress|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param PostalAddress|string $address
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "PostalAddress",
            "string",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return string|decimal|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string|decimal|null $latitude
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = array(
            "string",
            "decimal",
            "null",
        );

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return decimal|string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param decimal|string|null $longitude
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Country
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Country $addressCountry
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Country",
        );

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|string|null
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param decimal|string|null $elevation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setElevation($elevation)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $elevation = self::checkTypes($elevation, $types);

        $this->elevation = $elevation;
    }

}
