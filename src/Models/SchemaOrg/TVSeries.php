<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TVSeries extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TVSeries";
    }

    public static function fieldList() {
        $fields = [
            "seasons" => "seasons",
            "actor" => "actor",
            "numberOfEpisodes" => "numberOfEpisodes",
            "trailer" => "trailer",
            "season" => "season",
            "episodes" => "episodes",
            "countryOfOrigin" => "countryOfOrigin",
            "musicBy" => "musicBy",
            "containsSeason" => "containsSeason",
            "directors" => "directors",
            "numberOfSeasons" => "numberOfSeasons",
            "director" => "director",
            "productionCompany" => "productionCompany",
            "actors" => "actors",
            "episode" => "episode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $seasons;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actor;

    /**
     * The number of episodes in this season or series.
     *
     *
     * @var int|null
     */
    protected $numberOfEpisodes;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $trailer;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $season;

    /**
     * An episode of a TV/radio series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $episodes;

    /**
     * The country of the principal offices of the production company or individual responsible for the movie or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country
     */
    protected $countryOfOrigin;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    protected $musicBy;

    /**
     * A season that is part of the media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $containsSeason;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $directors;

    /**
     * The number of seasons in this series.
     *
     *
     * @var int|null
     */
    protected $numberOfSeasons;

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
     * An episode of a tv, radio or game media within a series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $episode;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason $seasons
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeasons($seasons)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        );

        $seasons = self::checkTypes($seasons, $types);

        $this->seasons = $seasons;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return int|null
     */
    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    /**
     * @param int|null $numberOfEpisodes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfEpisodes($numberOfEpisodes)
    {
        $types = array(
            "int",
            "null",
        );

        $numberOfEpisodes = self::checkTypes($numberOfEpisodes, $types);

        $this->numberOfEpisodes = $numberOfEpisodes;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $season
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeason($season)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        );

        $season = self::checkTypes($season, $types);

        $this->season = $season;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode $episodes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisodes($episodes)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Episode",
        );

        $episodes = self::checkTypes($episodes, $types);

        $this->episodes = $episodes;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    public function getContainsSeason()
    {
        return $this->containsSeason;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason $containsSeason
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsSeason($containsSeason)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        );

        $containsSeason = self::checkTypes($containsSeason, $types);

        $this->containsSeason = $containsSeason;
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
     * @return int|null
     */
    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    /**
     * @param int|null $numberOfSeasons
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfSeasons($numberOfSeasons)
    {
        $types = array(
            "int",
            "null",
        );

        $numberOfSeasons = self::checkTypes($numberOfSeasons, $types);

        $this->numberOfSeasons = $numberOfSeasons;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode $episode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisode($episode)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Episode",
        );

        $episode = self::checkTypes($episode, $types);

        $this->episode = $episode;
    }

}
