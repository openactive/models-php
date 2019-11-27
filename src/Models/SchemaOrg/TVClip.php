<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TVClip extends \OpenActive\Models\SchemaOrg\Clip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TVClip";
    }

    public static function fieldList() {
        $fields = [
            "partOfTVSeries" => "partOfTVSeries",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The TV series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TVSeries
     */
    protected $partOfTVSeries;

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

}
