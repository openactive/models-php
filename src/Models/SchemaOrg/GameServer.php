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
            "serverStatus" => "serverStatus",
            "game" => "game",
            "playersOnline" => "playersOnline",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Status of a game server.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GameServerStatus|string
     */
    protected $serverStatus;

    /**
     * Video game which is played on this server.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoGame|string
     */
    protected $game;

    /**
     * Number of players on the server.
     *
     *
     * @var int|null
     */
    protected $playersOnline;

    /**
     * @return \OpenActive\Models\SchemaOrg\GameServerStatus|string
     */
    public function getServerStatus()
    {
        return $this->serverStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GameServerStatus|string $serverStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServerStatus($serverStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GameServerStatus",
            "string",
        ];

        $serverStatus = self::checkTypes($serverStatus, $types);

        $this->serverStatus = $serverStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoGame|string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoGame|string $game
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGame($game)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\VideoGame",
            "string",
        ];

        $game = self::checkTypes($game, $types);

        $this->game = $game;
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
        $types = [
            "int",
            "null",
        ];

        $playersOnline = self::checkTypes($playersOnline, $types);

        $this->playersOnline = $playersOnline;
    }

}
