<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoCircle extends \OpenActive\Models\SchemaOrg\GeoShape
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeoCircle";
    }

    public static function fieldList() {
        $fields = [
            "geoRadius" => "geoRadius",
            "geoMidpoint" => "geoMidpoint",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string|Number|null
     */
    protected $geoRadius;

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoCoordinates|string
     */
    protected $geoMidpoint;

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|string|Number|null
     */
    public function getGeoRadius()
    {
        return $this->geoRadius;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|string|Number|null $geoRadius
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoRadius($geoRadius)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
            "Number",
            "null",
        ];

        $geoRadius = self::checkTypes($geoRadius, $types);

        $this->geoRadius = $geoRadius;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoCoordinates|string
     */
    public function getGeoMidpoint()
    {
        return $this->geoMidpoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoCoordinates|string $geoMidpoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoMidpoint($geoMidpoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoCoordinates",
            "string",
        ];

        $geoMidpoint = self::checkTypes($geoMidpoint, $types);

        $this->geoMidpoint = $geoMidpoint;
    }

}
