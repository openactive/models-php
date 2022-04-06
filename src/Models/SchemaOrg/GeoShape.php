<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoShape extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeoShape";
    }

    public static function fieldList() {
        $fields = [
            "addressCountry" => "addressCountry",
            "circle" => "circle",
            "line" => "line",
            "polygon" => "polygon",
            "address" => "address",
            "postalCode" => "postalCode",
            "elevation" => "elevation",
            "box" => "box",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $addressCountry;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     *
     * @var string
     */
    protected $circle;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     *
     * @var string
     */
    protected $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     *
     *
     * @var string
     */
    protected $polygon;

    /**
     * Physical address of the item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $address;

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT_OF_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     *
     *
     * @var string|Number|null
     */
    protected $elevation;

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
     *
     *
     * @var string
     */
    protected $box;

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
     * @return string
     */
    public function getCircle()
    {
        return $this->circle;
    }

    /**
     * @param string $circle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCircle($circle)
    {
        $types = [
            "string",
        ];

        $circle = self::checkTypes($circle, $types);

        $this->circle = $circle;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLine($line)
    {
        $types = [
            "string",
        ];

        $line = self::checkTypes($line, $types);

        $this->line = $line;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPolygon($polygon)
    {
        $types = [
            "string",
        ];

        $polygon = self::checkTypes($polygon, $types);

        $this->polygon = $polygon;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
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
     * @return string
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * @param string $box
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBox($box)
    {
        $types = [
            "string",
        ];

        $box = self::checkTypes($box, $types);

        $this->box = $box;
    }

}
