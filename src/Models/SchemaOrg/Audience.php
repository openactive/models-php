<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Audience extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Audience";
    }

    public static function fieldList() {
        $fields = [
            "audienceType" => "audienceType",
            "geographicArea" => "geographicArea",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
     *
     *
     * @var string
     */
    protected $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $geographicArea;

    /**
     * @return string
     */
    public function getAudienceType()
    {
        return $this->audienceType;
    }

    /**
     * @param string $audienceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudienceType($audienceType)
    {
        $types = [
            "string",
        ];

        $audienceType = self::checkTypes($audienceType, $types);

        $this->audienceType = $audienceType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $geographicArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeographicArea($geographicArea)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $geographicArea = self::checkTypes($geographicArea, $types);

        $this->geographicArea = $geographicArea;
    }

}
