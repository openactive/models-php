<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristTrip";
    }

    public static function fieldList() {
        $fields = [
            "touristType" => "touristType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Audience
     */
    protected $touristType;

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
