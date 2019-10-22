<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoShape extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * Physical address of the item.
     *
     *
     * @var PostalAddress|string
     */
    protected $address;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     *
     * @var string
     */
    protected $line;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     *
     * @var string
     */
    protected $circle;

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
     *
     *
     * @var string
     */
    protected $box;

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
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     *
     *
     * @var string
     */
    protected $polygon;

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
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param string $line
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLine($line)
    {
        $types = array(
            "string",
        );

        $line = self::checkTypes($line, $types);

        $this->line = $line;
    }

    /**
     * @return string
     */
    public function getCircle()
    {
        return $this->circle;
    }

    /**
     * @param string $circle
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCircle($circle)
    {
        $types = array(
            "string",
        );

        $circle = self::checkTypes($circle, $types);

        $this->circle = $circle;
    }

    /**
     * @return string
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * @param string $box
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBox($box)
    {
        $types = array(
            "string",
        );

        $box = self::checkTypes($box, $types);

        $this->box = $box;
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

    /**
     * @return string
     */
    public function getPolygon()
    {
        return $this->polygon;
    }

    /**
     * @param string $polygon
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPolygon($polygon)
    {
        $types = array(
            "string",
        );

        $polygon = self::checkTypes($polygon, $types);

        $this->polygon = $polygon;
    }

}
