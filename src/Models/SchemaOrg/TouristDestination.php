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
     * @var \OpenActive\Models\SchemaOrg\TouristAttraction|string
     */
    protected $includesAttraction;

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Audience
     */
    protected $touristType;

    /**
     * @return \OpenActive\Models\SchemaOrg\TouristAttraction|string
     */
    public function getIncludesAttraction()
    {
        return $this->includesAttraction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TouristAttraction|string $includesAttraction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesAttraction($includesAttraction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TouristAttraction",
            "string",
        ];

        $includesAttraction = self::checkTypes($includesAttraction, $types);

        $this->includesAttraction = $includesAttraction;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Audience
     */
    public function getTouristType()
    {
        return $this->touristType;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Audience $touristType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTouristType($touristType)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Audience",
        ];

        $touristType = self::checkTypes($touristType, $types);

        $this->touristType = $touristType;
    }

}
