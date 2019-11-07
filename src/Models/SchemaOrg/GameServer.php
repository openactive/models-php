<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GameServer extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GameServer";
    }

    /**
     * Status of a game server.
     *
     *
     * @var \OpenActive\Enums\GameServerStatus|null
     */
    protected $serverStatus;

    /**
     * Number of players on the server.
     *
     *
     * @var int|null
     */
    protected $playersOnline;

    /**
     * Video game which is played on this server.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoGame
     */
    protected $game;

    /**
     * @return \OpenActive\Enums\GameServerStatus|null
     */
    public function getServerStatus()
    {
        return $this->serverStatus;
    }

    /**
     * @param \OpenActive\Enums\GameServerStatus|null $serverStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServerStatus($serverStatus)
    {
        $types = array(
            "\OpenActive\Enums\GameServerStatus",
            "null",
        );

        $serverStatus = self::checkTypes($serverStatus, $types);

        $this->serverStatus = $serverStatus;
    }

    /**
     * @return int|null
     */
    public function getPlayersOnline()
    {
        return $this->playersOnline;
    }

    /**
     * @param int|null $playersOnline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayersOnline($playersOnline)
    {
        $types = array(
            "int",
            "null",
        );

        $playersOnline = self::checkTypes($playersOnline, $types);

        $this->playersOnline = $playersOnline;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoGame
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoGame $game
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGame($game)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\VideoGame",
        );

        $game = self::checkTypes($game, $types);

        $this->game = $game;
    }

}
