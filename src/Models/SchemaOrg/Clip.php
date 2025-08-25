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
            "actor" => "actor",
            "partOfEpisode" => "partOfEpisode",
            "partOfSeason" => "partOfSeason",
            "actors" => "actors",
            "directors" => "directors",
            "clipNumber" => "clipNumber",
            "endOffset" => "endOffset",
            "partOfSeries" => "partOfSeries",
            "startOffset" => "startOffset",
            "director" => "director",
            "musicBy" => "musicBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string
     */
    protected $actor;

    /**
     * The episode to which this clip belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode|string
     */
    protected $partOfEpisode;

    /**
     * The season to which this episode belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $partOfSeason;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actors;

    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $directors;

    /**
     * Position of the clip within an ordered group of clips.
     *
     *
     * @var string|int|null
     */
    protected $clipNumber;

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    protected $endOffset;

    /**
     * The series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeries|string
     */
    protected $partOfSeries;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    protected $startOffset;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $director;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    protected $musicBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\PerformingGroup",
            "string",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode|string
     */
    public function getPartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode|string $partOfEpisode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfEpisode($partOfEpisode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
            "string",
        ];

        $partOfEpisode = self::checkTypes($partOfEpisode, $types);

        $this->partOfEpisode = $partOfEpisode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $partOfSeason
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfSeason($partOfSeason)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $partOfSeason = self::checkTypes($partOfSeason, $types);

        $this->partOfSeason = $partOfSeason;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
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
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    public function getEndOffset()
    {
        return $this->endOffset;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null $endOffset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndOffset($endOffset)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "string",
            "Number",
            "null",
        ];

        $endOffset = self::checkTypes($endOffset, $types);

        $this->endOffset = $endOffset;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeries|string
     */
    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeries|string $partOfSeries
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfSeries($partOfSeries)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeries",
            "string",
        ];

        $partOfSeries = self::checkTypes($partOfSeries, $types);

        $this->partOfSeries = $partOfSeries;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    public function getStartOffset()
    {
        return $this->startOffset;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null $startOffset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartOffset($startOffset)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "string",
            "Number",
            "null",
        ];

        $startOffset = self::checkTypes($startOffset, $types);

        $this->startOffset = $startOffset;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "string",
        ];

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

}
