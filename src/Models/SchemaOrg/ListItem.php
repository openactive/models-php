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
            "position" => "position",
            "nextItem" => "nextItem",
            "item" => "item",
            "previousItem" => "previousItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     *
     * @var string|int|null
     */
    protected $position;

    /**
     * A link to the ListItem that follows the current one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ListItem|string
     */
    protected $nextItem;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $item;

    /**
     * A link to the ListItem that precedes the current one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ListItem|string
     */
    protected $previousItem;

    /**
     * @return string|int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string|int|null $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $position = self::checkTypes($position, $types);

        $this->position = $position;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ListItem|string
     */
    public function getNextItem()
    {
        return $this->nextItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ListItem|string $nextItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNextItem($nextItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
        ];

        $nextItem = self::checkTypes($nextItem, $types);

        $this->nextItem = $nextItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $item
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItem($item)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $item = self::checkTypes($item, $types);

        $this->item = $item;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ListItem|string
     */
    public function getPreviousItem()
    {
        return $this->previousItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ListItem|string $previousItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreviousItem($previousItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
        ];

        $previousItem = self::checkTypes($previousItem, $types);

        $this->previousItem = $previousItem;
    }

}
