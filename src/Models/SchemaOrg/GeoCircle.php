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
            "geoMidpoint" => "geoMidpoint",
            "geoRadius" => "geoRadius",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoCoordinates
     */
    protected $geoMidpoint;

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Distance|Number|null
     */
    protected $geoRadius;

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoCoordinates
     */
    public function getGeoMidpoint()
    {
        return $this->geoMidpoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoCoordinates $geoMidpoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoMidpoint($geoMidpoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoCoordinates",
        ];

        $geoMidpoint = self::checkTypes($geoMidpoint, $types);

        $this->geoMidpoint = $geoMidpoint;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Distance|Number|null
     */
    public function getGeoRadius()
    {
        return $this->geoRadius;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Distance|Number|null $geoRadius
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoRadius($geoRadius)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Distance",
            "Number",
            "null",
        ];

        $geoRadius = self::checkTypes($geoRadius, $types);

        $this->geoRadius = $geoRadius;
    }

}
