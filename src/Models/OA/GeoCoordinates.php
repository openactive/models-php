<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [GeoCoordinates](https://schema.org/GeoCoordinates), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class GeoCoordinates extends \OpenActive\Models\SchemaOrg\GeoCoordinates
{
    /**
     * The latitude of a location. For example 51.522338 (WGS 84).
     *
     * ```json
     * "latitude": 51.522338
     * ```
     *
     * @var float|null
     */
    protected $latitude;

    /**
     * The longitude of a location. For example -0.083437 (WGS 84).
     *
     * ```json
     * "longitude": -0.083437
     * ```
     *
     * @var float|null
     */
    protected $longitude;

    /**
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = array(
            "float",
            "null",
        );

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = array(
            "float",
            "null",
        );

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

}
