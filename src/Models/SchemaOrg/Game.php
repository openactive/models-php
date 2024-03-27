<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Game extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Game";
    }

    public static function fieldList() {
        $fields = [
            "characterAttribute" => "characterAttribute",
            "gameLocation" => "gameLocation",
            "quest" => "quest",
            "numberOfPlayers" => "numberOfPlayers",
            "gameItem" => "gameItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $characterAttribute;

    /**
     * Real or fictional location of the game (or part of game).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $gameLocation;

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $quest;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfPlayers;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $gameItem;

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
     * @return \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\PostalAddress $gameLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameLocation($gameLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $gameLocation = self::checkTypes($gameLocation, $types);

        $this->gameLocation = $gameLocation;
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

}
