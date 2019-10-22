<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Clip extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actor;

    /**
     * The episode to which this clip belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $partOfEpisode;

    /**
     * The series to which this episode or season belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeries
     */
    protected $partOfSeries;

    /**
     * The season to which this episode belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $partOfSeason;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $musicBy;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $directors;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $director;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actors;

    /**
     * Position of the clip within an ordered group of clips.
     *
     *
     * @var int|string|null
     */
    protected $clipNumber;

    /**
     * @return Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param Person $actor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = array(
            "Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPartOfEpisode($partOfEpisode)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Episode",
        );

        $partOfEpisode = self::checkTypes($partOfEpisode, $types);

        $this->partOfEpisode = $partOfEpisode;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPartOfSeries($partOfSeries)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeries",
        );

        $partOfSeries = self::checkTypes($partOfSeries, $types);

        $this->partOfSeries = $partOfSeries;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPartOfSeason($partOfSeason)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        );

        $partOfSeason = self::checkTypes($partOfSeason, $types);

        $this->partOfSeason = $partOfSeason;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\MusicGroup $musicBy
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
        );

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

    /**
     * @return Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param Person $directors
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = array(
            "Person",
        );

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param Person $director
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = array(
            "Person",
        );

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param Person $actors
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = array(
            "Person",
        );

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return int|string|null
     */
    public function getClipNumber()
    {
        return $this->clipNumber;
    }

    /**
     * @param int|string|null $clipNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setClipNumber($clipNumber)
    {
        $types = array(
            "int",
            "string",
            "null",
        );

        $clipNumber = self::checkTypes($clipNumber, $types);

        $this->clipNumber = $clipNumber;
    }

}
