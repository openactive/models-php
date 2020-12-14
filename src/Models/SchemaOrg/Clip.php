<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Clip extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Clip";
    }

    public static function fieldList() {
        $fields = [
            "musicBy" => "musicBy",
            "startOffset" => "startOffset",
            "partOfSeason" => "partOfSeason",
            "clipNumber" => "clipNumber",
            "actor" => "actor",
            "endOffset" => "endOffset",
            "partOfSeries" => "partOfSeries",
            "partOfEpisode" => "partOfEpisode",
            "actors" => "actors",
            "director" => "director",
            "directors" => "directors",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $musicBy;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry|Number|null
     */
    protected $startOffset;

    /**
     * The season to which this episode belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $partOfSeason;

    /**
     * Position of the clip within an ordered group of clips.
     *
     *
     * @var string|int|null
     */
    protected $clipNumber;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actor;

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\HyperTocEntry|null
     */
    protected $endOffset;

    /**
     * The series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeries
     */
    protected $partOfSeries;

    /**
     * The episode to which this clip belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $partOfEpisode;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actors;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $director;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $directors;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
        ];

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry|Number|null
     */
    public function getStartOffset()
    {
        return $this->startOffset;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry|Number|null $startOffset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartOffset($startOffset)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "Number",
            "null",
        ];

        $startOffset = self::checkTypes($startOffset, $types);

        $this->startOffset = $startOffset;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason $partOfSeason
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfSeason($partOfSeason)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        ];

        $partOfSeason = self::checkTypes($partOfSeason, $types);

        $this->partOfSeason = $partOfSeason;
    }

    /**
     * @return string|int|null
     */
    public function getClipNumber()
    {
        return $this->clipNumber;
    }

    /**
     * @param string|int|null $clipNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setClipNumber($clipNumber)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $clipNumber = self::checkTypes($clipNumber, $types);

        $this->clipNumber = $clipNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\HyperTocEntry|null
     */
    public function getEndOffset()
    {
        return $this->endOffset;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\HyperTocEntry|null $endOffset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndOffset($endOffset)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "null",
        ];

        $endOffset = self::checkTypes($endOffset, $types);

        $this->endOffset = $endOffset;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeries
     */
    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeries $partOfSeries
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfSeries($partOfSeries)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeries",
        ];

        $partOfSeries = self::checkTypes($partOfSeries, $types);

        $this->partOfSeries = $partOfSeries;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode
     */
    public function getPartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode $partOfEpisode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfEpisode($partOfEpisode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
        ];

        $partOfEpisode = self::checkTypes($partOfEpisode, $types);

        $this->partOfEpisode = $partOfEpisode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

}
