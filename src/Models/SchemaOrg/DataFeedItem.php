<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DataFeedItem extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DataFeedItem";
    }

    public static function fieldList() {
        $fields = [
            "dateModified" => "dateModified",
            "item" => "item",
            "dateCreated" => "dateCreated",
            "dateDeleted" => "dateDeleted",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateModified;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $item;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateCreated;

    /**
     * The datetime the item was removed from the DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateDeleted;

    /**
     * @return Date|DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param Date|DateTime|null $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $item = self::checkTypes($item, $types);

        $this->item = $item;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param Date|DateTime|null $dateCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateCreated($dateCreated)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateCreated = self::checkTypes($dateCreated, $types);

        $this->dateCreated = $dateCreated;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * @param Date|DateTime|null $dateDeleted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateDeleted($dateDeleted)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateDeleted = self::checkTypes($dateDeleted, $types);

        $this->dateDeleted = $dateDeleted;
    }

}
