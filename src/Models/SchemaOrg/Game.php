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
            "quest" => "quest",
            "gameItem" => "gameItem",
            "numberOfPlayers" => "numberOfPlayers",
            "gameLocation" => "gameLocation",
            "characterAttribute" => "characterAttribute",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $quest;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $gameItem;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfPlayers;

    /**
     * Real or fictional location of the game (or part of game).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $gameLocation;

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $characterAttribute;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $quest = self::checkTypes($quest, $types);

        $this->quest = $quest;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $gameItem = self::checkTypes($gameItem, $types);

        $this->gameItem = $gameItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getNumberOfPlayers()
    {
        return $this->numberOfPlayers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $numberOfPlayers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPlayers($numberOfPlayers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $numberOfPlayers = self::checkTypes($numberOfPlayers, $types);

        $this->numberOfPlayers = $numberOfPlayers;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress $gameLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameLocation($gameLocation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $gameLocation = self::checkTypes($gameLocation, $types);

        $this->gameLocation = $gameLocation;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $characterAttribute = self::checkTypes($characterAttribute, $types);

        $this->characterAttribute = $characterAttribute;
    }

}
