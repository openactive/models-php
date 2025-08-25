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

    public static function fieldList() {
        $fields = [
            "actor" => "actor",
            "gamePlatform" => "gamePlatform",
            "trailer" => "trailer",
            "actors" => "actors",
            "containsSeason" => "containsSeason",
            "numberOfSeasons" => "numberOfSeasons",
            "quest" => "quest",
            "episode" => "episode",
            "numberOfPlayers" => "numberOfPlayers",
            "directors" => "directors",
            "cheatCode" => "cheatCode",
            "seasons" => "seasons",
            "gameItem" => "gameItem",
            "gameLocation" => "gameLocation",
            "season" => "season",
            "productionCompany" => "productionCompany",
            "characterAttribute" => "characterAttribute",
            "playMode" => "playMode",
            "director" => "director",
            "numberOfEpisodes" => "numberOfEpisodes",
            "musicBy" => "musicBy",
            "episodes" => "episodes",
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
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $gamePlatform;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject|string
     */
    protected $trailer;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actors;

    /**
     * A season that is part of the media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $containsSeason;

    /**
     * The number of seasons in this series.
     *
     *
     * @var int|null
     */
    protected $numberOfSeasons;

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $quest;

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode|string
     */
    protected $episode;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfPlayers;

    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $directors;

    /**
     * Cheat codes to the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $cheatCode;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $seasons;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $gameItem;

    /**
     * Real or fictional location of the game (or part of game).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress|\OpenActive\Models\SchemaOrg\Place
     */
    protected $gameLocation;

    /**
     * A season in a media series.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    protected $season;

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $productionCompany;

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $characterAttribute;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GamePlayMode|null
     */
    protected $playMode;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $director;

    /**
     * The number of episodes in this season or series.
     *
     *
     * @var int|null
     */
    protected $numberOfEpisodes;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    protected $musicBy;

    /**
     * An episode of a TV/radio series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode|string
     */
    protected $episodes;

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
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $gamePlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGamePlatform($gamePlatform)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $gamePlatform = self::checkTypes($gamePlatform, $types);

        $this->gamePlatform = $gamePlatform;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject|string
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject|string $trailer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrailer($trailer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\VideoObject",
            "string",
        ];

        $trailer = self::checkTypes($trailer, $types);

        $this->trailer = $trailer;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getContainsSeason()
    {
        return $this->containsSeason;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $containsSeason
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsSeason($containsSeason)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $containsSeason = self::checkTypes($containsSeason, $types);

        $this->containsSeason = $containsSeason;
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
        $types = [
            "int",
            "null",
        ];

        $numberOfSeasons = self::checkTypes($numberOfSeasons, $types);

        $this->numberOfSeasons = $numberOfSeasons;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getQuest()
    {
        return $this->quest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $quest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuest($quest)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $quest = self::checkTypes($quest, $types);

        $this->quest = $quest;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode|string
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode|string $episode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisode($episode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
            "string",
        ];

        $episode = self::checkTypes($episode, $types);

        $this->episode = $episode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumberOfPlayers()
    {
        return $this->numberOfPlayers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numberOfPlayers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPlayers($numberOfPlayers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numberOfPlayers = self::checkTypes($numberOfPlayers, $types);

        $this->numberOfPlayers = $numberOfPlayers;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getCheatCode()
    {
        return $this->cheatCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $cheatCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheatCode($cheatCode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $cheatCode = self::checkTypes($cheatCode, $types);

        $this->cheatCode = $cheatCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $seasons
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeasons($seasons)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $seasons = self::checkTypes($seasons, $types);

        $this->seasons = $seasons;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getGameItem()
    {
        return $this->gameItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $gameItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameItem($gameItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $gameItem = self::checkTypes($gameItem, $types);

        $this->gameItem = $gameItem;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PostalAddress|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PostalAddress|\OpenActive\Models\SchemaOrg\Place $gameLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameLocation($gameLocation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $gameLocation = self::checkTypes($gameLocation, $types);

        $this->gameLocation = $gameLocation;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWorkSeason
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWorkSeason $season
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeason($season)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
        ];

        $season = self::checkTypes($season, $types);

        $this->season = $season;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getCharacterAttribute()
    {
        return $this->characterAttribute;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $characterAttribute
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCharacterAttribute($characterAttribute)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $characterAttribute = self::checkTypes($characterAttribute, $types);

        $this->characterAttribute = $characterAttribute;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GamePlayMode|null
     */
    public function getPlayMode()
    {
        return $this->playMode;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GamePlayMode|null $playMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayMode($playMode)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\GamePlayMode",
            "null",
        ];

        $playMode = self::checkTypes($playMode, $types);

        $this->playMode = $playMode;
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
        $types = [
            "int",
            "null",
        ];

        $numberOfEpisodes = self::checkTypes($numberOfEpisodes, $types);

        $this->numberOfEpisodes = $numberOfEpisodes;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode|string
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode|string $episodes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisodes($episodes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
            "string",
        ];

        $episodes = self::checkTypes($episodes, $types);

        $this->episodes = $episodes;
    }

}
