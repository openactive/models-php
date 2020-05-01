<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Episode extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Episode";
    }

    public static function fieldList() {
        $fields = [
            "actor" => "actor",
            "trailer" => "trailer",
            "partOfSeries" => "partOfSeries",
            "partOfSeason" => "partOfSeason",
            "musicBy" => "musicBy",
            "directors" => "directors",
            "episodeNumber" => "episodeNumber",
            "director" => "director",
            "productionCompany" => "productionCompany",
            "actors" => "actors",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actor;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $trailer;

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
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    protected $musicBy;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $directors;

    /**
     * Position of the episode within an ordered group of episodes.
     *
     *
     * @var string|int|null
     */
    protected $episodeNumber;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $director;

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $productionCompany;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actors;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject $trailer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrailer($trailer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\VideoObject",
        );

        $trailer = self::checkTypes($trailer, $types);

        $this->trailer = $trailer;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return string|int|null
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * @param string|int|null $episodeNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $types = array(
            "string",
            "int",
            "null",
        );

        $episodeNumber = self::checkTypes($episodeNumber, $types);

        $this->episodeNumber = $episodeNumber;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

}
