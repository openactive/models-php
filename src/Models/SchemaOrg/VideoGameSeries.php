<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGameSeries extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoGameSeries";
    }

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|Person
     */
    protected $musicBy;

    /**
     * An episode of a tv, radio or game media within a series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $episode;

    /**
     * A season that is part of the media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $containsSeason;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $gameItem;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $directors;

    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $gamePlatform;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     *
     *
     * @var \OpenActive\Enums\GamePlayMode|null
     */
    protected $playMode;

    /**
     * The number of episodes in this season or series.
     *
     *
     * @var int|null
     */
    protected $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     *
     *
     * @var int|null
     */
    protected $numberOfSeasons;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $season;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $director;

    /**
     * Cheat codes to the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $cheatCode;

    /**
     * Real or fictional location of the game (or part of game).
     *
     *
     * @var Place|PostalAddress|string
     */
    protected $gameLocation;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actors;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     *
     * @var QuantitativeValue
     */
    protected $numberOfPlayers;

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $quest;

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     *
     *
     * @var Organization
     */
    protected $productionCompany;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $seasons;

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $characterAttribute;

    /**
     * An episode of a TV/radio series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode
     */
    protected $episodes;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $trailer;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actor;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|Person
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|Person $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "Person",
        );

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
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
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getGameItem()
    {
        return $this->gameItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $gameItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameItem($gameItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $gameItem = self::checkTypes($gameItem, $types);

        $this->gameItem = $gameItem;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $gamePlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGamePlatform($gamePlatform)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $gamePlatform = self::checkTypes($gamePlatform, $types);

        $this->gamePlatform = $gamePlatform;
    }

    /**
     * @return \OpenActive\Enums\GamePlayMode|null
     */
    public function getPlayMode()
    {
        return $this->playMode;
    }

    /**
     * @param \OpenActive\Enums\GamePlayMode|null $playMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayMode($playMode)
    {
        $types = array(
            "\OpenActive\Enums\GamePlayMode",
            "null",
        );

        $playMode = self::checkTypes($playMode, $types);

        $this->playMode = $playMode;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason $season
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeason($season)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        );

        $season = self::checkTypes($season, $types);

        $this->season = $season;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCheatCode()
    {
        return $this->cheatCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $cheatCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheatCode($cheatCode)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $cheatCode = self::checkTypes($cheatCode, $types);

        $this->cheatCode = $cheatCode;
    }

    /**
     * @return Place|PostalAddress|string
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    /**
     * @param Place|PostalAddress|string $gameLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameLocation($gameLocation)
    {
        $types = array(
            "Place",
            "PostalAddress",
            "string",
        );

        $gameLocation = self::checkTypes($gameLocation, $types);

        $this->gameLocation = $gameLocation;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return QuantitativeValue
     */
    public function getNumberOfPlayers()
    {
        return $this->numberOfPlayers;
    }

    /**
     * @param QuantitativeValue $numberOfPlayers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPlayers($numberOfPlayers)
    {
        $types = array(
            "QuantitativeValue",
        );

        $numberOfPlayers = self::checkTypes($numberOfPlayers, $types);

        $this->numberOfPlayers = $numberOfPlayers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getQuest()
    {
        return $this->quest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $quest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuest($quest)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $quest = self::checkTypes($quest, $types);

        $this->quest = $quest;
    }

    /**
     * @return Organization
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param Organization $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = array(
            "Organization",
        );

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getCharacterAttribute()
    {
        return $this->characterAttribute;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $characterAttribute
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCharacterAttribute($characterAttribute)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $characterAttribute = self::checkTypes($characterAttribute, $types);

        $this->characterAttribute = $characterAttribute;
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
     * @return Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param Person $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = array(
            "Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

}
