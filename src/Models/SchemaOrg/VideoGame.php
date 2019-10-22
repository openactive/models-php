<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGame extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $gamePlatform;

    /**
     * The server on which  it is possible to play the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GameServer
     */
    protected $gameServer;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
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
     * Cheat codes to the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $cheatCode;

    /**
     * Links to tips, tactics, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $gameTip;

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
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     *
     *
     * @var Schema.NET.GamePlayMode|null
     */
    protected $playMode;

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
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $gamePlatform
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\GameServer
     */
    public function getGameServer()
    {
        return $this->gameServer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GameServer $gameServer
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGameServer($gameServer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GameServer",
        );

        $gameServer = self::checkTypes($gameServer, $types);

        $this->gameServer = $gameServer;
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
     * @return \OpenActive\Models\SchemaOrg\VideoObject
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject $trailer
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCheatCode()
    {
        return $this->cheatCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $cheatCode
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getGameTip()
    {
        return $this->gameTip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $gameTip
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGameTip($gameTip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $gameTip = self::checkTypes($gameTip, $types);

        $this->gameTip = $gameTip;
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
     * @return Schema.NET.GamePlayMode|null
     */
    public function getPlayMode()
    {
        return $this->playMode;
    }

    /**
     * @param Schema.NET.GamePlayMode|null $playMode
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPlayMode($playMode)
    {
        $types = array(
            "Schema.NET.GamePlayMode",
            "null",
        );

        $playMode = self::checkTypes($playMode, $types);

        $this->playMode = $playMode;
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

}
