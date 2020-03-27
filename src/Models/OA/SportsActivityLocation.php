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

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "containedInPlace" => "containedInPlace",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the internal location where the activity is taking place
     *
     * ```json
     * "name": "Court 1"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * While a `url` is not specified as an option in the Modelling Specification, it is necessary to link entities in RPDE.
     *
     * ```json
     * "containedInPlace": "http://www.example.org/api/locations/8958f9b8-2004-4e90-80ff-50c98a9b121d"
     * ```
     *
     * @var string|\OpenActive\Models\OA\Place
     */
    protected $containedInPlace;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string|\OpenActive\Models\OA\Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param string|\OpenActive\Models\OA\Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = array(
            "string",
            "\OpenActive\Models\OA\Place",
        );

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

}
