<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TVSeason extends \OpenActive\Models\SchemaOrg\CreativeWorkSeason
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TVSeason";
    }

    public static function fieldList() {
        $fields = [
            "countryOfOrigin" => "countryOfOrigin",
            "partOfTVSeries" => "partOfTVSeries",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The country of origin of something, including products as well as creative  works such as movie and TV content.
     * 
     * In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.
     * 
     * In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $countryOfOrigin;

    /**
     * The TV series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TVSeries|string
     */
    protected $partOfTVSeries;

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $countryOfOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $countryOfOrigin = self::checkTypes($countryOfOrigin, $types);

        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TVSeries|string
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TVSeries|string $partOfTVSeries
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfTVSeries($partOfTVSeries)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TVSeries",
            "string",
        ];

        $partOfTVSeries = self::checkTypes($partOfTVSeries, $types);

        $this->partOfTVSeries = $partOfTVSeries;
    }

}
