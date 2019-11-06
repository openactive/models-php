<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [SportsActivityLocation](https://schema.org/SportsActivityLocation), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class SportsActivityLocation extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "SportsActivityLocation";
    }

    /**
     * While a `url` is not specified as an option in the Modelling Specification, it is necessary to link entities in RPDE.
     *
     * ```json
     * "containedInPlace": "http://www.example.org/api/locations/8958f9b8-2004-4e90-80ff-50c98a9b121d"
     * ```
     *
     * @var string|Place
     */
    protected $containedInPlace;

    /**
     * @return string|Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param string|Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = array(
            "string",
            "Place",
        );

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

}
