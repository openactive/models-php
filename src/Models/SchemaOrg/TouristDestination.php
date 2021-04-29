<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristDestination extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristDestination";
    }

    public static function fieldList() {
        $fields = [
            "includesAttraction" => "includesAttraction",
            "touristType" => "touristType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Attraction located at destination.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TouristAttraction
     */
    protected $includesAttraction;

    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $touristType;

    /**
     * @return \OpenActive\Models\SchemaOrg\TouristAttraction
     */
    public function getIncludesAttraction()
    {
        return $this->includesAttraction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TouristAttraction $includesAttraction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesAttraction($includesAttraction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TouristAttraction",
        ];

        $includesAttraction = self::checkTypes($includesAttraction, $types);

        $this->includesAttraction = $includesAttraction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getTouristType()
    {
        return $this->touristType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $touristType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTouristType($touristType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $touristType = self::checkTypes($touristType, $types);

        $this->touristType = $touristType;
    }

}
