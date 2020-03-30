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

    public static function fieldList() {
        $fields = [
            "game" => "game",
            "playersOnline" => "playersOnline",
            "serverStatus" => "serverStatus",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Video game which is played on this server.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoGame
     */
    protected $game;

    /**
     * Number of players on the server.
     *
     *
     * @var null|int
     */
    protected $playersOnline;

    /**
     * Status of a game server.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GameServerStatus|null
     */
    protected $serverStatus;

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

    /**
     * @return null|int
     */
    public function getPlayersOnline()
    {
        return $this->playersOnline;
    }

    /**
     * @param null|int $playersOnline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayersOnline($playersOnline)
    {
        $types = array(
            "null",
            "int",
        );

        $playersOnline = self::checkTypes($playersOnline, $types);

        $this->playersOnline = $playersOnline;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GameServerStatus|null
     */
    public function getServerStatus()
    {
        return $this->serverStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GameServerStatus|null $serverStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServerStatus($serverStatus)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\GameServerStatus",
            "null",
        );

        $serverStatus = self::checkTypes($serverStatus, $types);

        $this->serverStatus = $serverStatus;
    }

}
