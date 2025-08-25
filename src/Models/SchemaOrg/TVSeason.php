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

    public static function fieldList() {
        $fields = [
            "titleEIDR" => "titleEIDR",
            "countryOfOrigin" => "countryOfOrigin",
            "partOfTVSeries" => "partOfTVSeries",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television.
     * 
     * For example, the motion picture known as "Ghostbusters" has a titleEIDR of  "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls "edits". See [[editEIDR]].
     * 
     * Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * 
     *
     *
     * @var string
     */
    protected $titleEIDR;

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
     * @return string
     */
    public function getTitleEIDR()
    {
        return $this->titleEIDR;
    }

    /**
     * @param string $titleEIDR
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTitleEIDR($titleEIDR)
    {
        $types = [
            "string",
        ];

        $titleEIDR = self::checkTypes($titleEIDR, $types);

        $this->titleEIDR = $titleEIDR;
    }

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
