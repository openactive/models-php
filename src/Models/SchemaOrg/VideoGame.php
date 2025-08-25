<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGame extends \OpenActive\Models\SchemaOrg\Game
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoGame";
    }

    public static function fieldList() {
        $fields = [
            "actor" => "actor",
            "gamePlatform" => "gamePlatform",
            "trailer" => "trailer",
            "actors" => "actors",
            "gameServer" => "gameServer",
            "gameTip" => "gameTip",
            "directors" => "directors",
            "cheatCode" => "cheatCode",
            "gameEdition" => "gameEdition",
            "playMode" => "playMode",
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
     * The server on which  it is possible to play the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GameServer|string
     */
    protected $gameServer;

    /**
     * Links to tips, tactics, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $gameTip;

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
     * The edition of a video game.
     *
     *
     * @var string
     */
    protected $gameEdition;

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
     * @return \OpenActive\Models\SchemaOrg\GameServer|string
     */
    public function getGameServer()
    {
        return $this->gameServer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GameServer|string $gameServer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameServer($gameServer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GameServer",
            "string",
        ];

        $gameServer = self::checkTypes($gameServer, $types);

        $this->gameServer = $gameServer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getGameTip()
    {
        return $this->gameTip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $gameTip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameTip($gameTip)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $gameTip = self::checkTypes($gameTip, $types);

        $this->gameTip = $gameTip;
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
     * @return string
     */
    public function getGameEdition()
    {
        return $this->gameEdition;
    }

    /**
     * @param string $gameEdition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameEdition($gameEdition)
    {
        $types = [
            "string",
        ];

        $gameEdition = self::checkTypes($gameEdition, $types);

        $this->gameEdition = $gameEdition;
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
