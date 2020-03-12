<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ListItem extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ListItem";
    }

    public static function fieldList() {
        $fields = [
            "nextItem" => "nextItem",
            "position" => "position",
            "previousItem" => "previousItem",
            "item" => "item",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A link to the ListItem that follows the current one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ListItem
     */
    protected $nextItem;

    /**
     * The position of an item in a series or sequence of items.
     *
     *
     * @var null|int|string
     */
    protected $position;

    /**
     * A link to the ListItem that preceeds the current one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ListItem
     */
    protected $previousItem;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $item;

    /**
     * @return \OpenActive\Models\SchemaOrg\ListItem
     */
    public function getNextItem()
    {
        return $this->nextItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ListItem $nextItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNextItem($nextItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ListItem",
        );

        $nextItem = self::checkTypes($nextItem, $types);

        $this->nextItem = $nextItem;
    }

    /**
     * @return null|int|string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param null|int|string $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = array(
            "null",
            "int",
            "string",
        );

        $position = self::checkTypes($position, $types);

        $this->position = $position;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ListItem
     */
    public function getPreviousItem()
    {
        return $this->previousItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ListItem $previousItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreviousItem($previousItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ListItem",
        );

        $previousItem = self::checkTypes($previousItem, $types);

        $this->previousItem = $previousItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $item
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItem($item)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $item = self::checkTypes($item, $types);

        $this->item = $item;
    }

}
