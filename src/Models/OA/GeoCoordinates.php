<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [GeoCoordinates](https://schema.org/GeoCoordinates), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class GeoCoordinates extends \OpenActive\Models\SchemaOrg\GeoCoordinates
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "GeoCoordinates";
    }

    public static function fieldList() {
        $fields = [
            "latitude" => "latitude",
            "longitude" => "longitude",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The latitude of a location. For example 51.522338 (WGS 84).
     *
     * ```json
     * "latitude": "51.522338"
     * ```
     *
     * @var null|float
     */
    protected $latitude;

    /**
     * The longitude of a location. For example -0.083437 (WGS 84).
     *
     * ```json
     * "longitude": "-0.083437"
     * ```
     *
     * @var null|float
     */
    protected $longitude;

    /**
     * @return null|float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param null|float $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = array(
            "null",
            "float",
        );

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return null|float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param null|float $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = array(
            "null",
            "float",
        );

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

}
