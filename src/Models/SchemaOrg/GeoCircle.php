<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class GeoCircle extends \OpenActive\Models\SchemaOrg\GeoShape
{
    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string|decimal|null
     */
    protected $geoRadius;

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     *
     * @var GeoCoordinates
     */
    protected $geoMidpoint;

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|string|decimal|null
     */
    public function getGeoRadius()
    {
        return $this->geoRadius;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|string|decimal|null $geoRadius
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGeoRadius($geoRadius)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
            "decimal",
            "null",
        );

        $geoRadius = self::checkTypes($geoRadius, $types);

        $this->geoRadius = $geoRadius;
    }

    /**
     * @return GeoCoordinates
     */
    public function getGeoMidpoint()
    {
        return $this->geoMidpoint;
    }

    /**
     * @param GeoCoordinates $geoMidpoint
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGeoMidpoint($geoMidpoint)
    {
        $types = array(
            "GeoCoordinates",
        );

        $geoMidpoint = self::checkTypes($geoMidpoint, $types);

        $this->geoMidpoint = $geoMidpoint;
    }

}
