<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ItemList extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ItemList";
    }

    public static function fieldList() {
        $fields = [
            "numberOfItems" => "numberOfItems",
            "itemListElement" => "itemListElement",
            "itemListOrder" => "itemListOrder",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g., multi-page pagination); in such cases, the numberOfItems would be for the entire list.
     *
     *
     * @var int|null
     */
    protected $numberOfItems;

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.\n\nText values are best if the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list or when the same item might be in different places in different lists.\n\nNote: The order of elements in your mark-up is not sufficient for indicating the order or elements.  Use ListItem with a 'position' property in such cases.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    protected $itemListElement;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\ItemListOrderType|null
     */
    protected $itemListOrder;

    /**
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * @param int|null $numberOfItems
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfItems($numberOfItems)
    {
        $types = [
            "int",
            "null",
        ];

        $numberOfItems = self::checkTypes($numberOfItems, $types);

        $this->numberOfItems = $numberOfItems;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    public function getItemListElement()
    {
        return $this->itemListElement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\ListItem|string $itemListElement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemListElement($itemListElement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
        ];

        $itemListElement = self::checkTypes($itemListElement, $types);

        $this->itemListElement = $itemListElement;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\ItemListOrderType|null
     */
    public function getItemListOrder()
    {
        return $this->itemListOrder;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\ItemListOrderType|null $itemListOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemListOrder($itemListOrder)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\ItemListOrderType",
            "null",
        ];

        $itemListOrder = self::checkTypes($itemListOrder, $types);

        $this->itemListOrder = $itemListOrder;
    }

}
