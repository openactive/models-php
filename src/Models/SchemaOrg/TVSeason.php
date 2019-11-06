<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TVSeason extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TVSeason";
    }

    /**
     * The TV series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TVSeries
     */
    protected $partOfTVSeries;

    /**
     * The country of the principal offices of the production company or individual responsible for the movie or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country
     */
    protected $countryOfOrigin;

    /**
     * @return \OpenActive\Models\SchemaOrg\TVSeries
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TVSeries $partOfTVSeries
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfTVSeries($partOfTVSeries)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\TVSeries",
        );

        $partOfTVSeries = self::checkTypes($partOfTVSeries, $types);

        $this->partOfTVSeries = $partOfTVSeries;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country $countryOfOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Country",
        );

        $countryOfOrigin = self::checkTypes($countryOfOrigin, $types);

        $this->countryOfOrigin = $countryOfOrigin;
    }

}
