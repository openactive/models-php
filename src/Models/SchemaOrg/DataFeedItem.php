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

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     *
     * @var DateTime|null
     */
    protected $dateModified;

    /**
     * The datetime the item was removed from the DataFeed.
     *
     *
     * @var DateTime|null
     */
    protected $dateDeleted;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     *
     * @var DateTime|null
     */
    protected $dateCreated;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $item;

    /**
     * @return DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param DateTime|null $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return DateTime|null
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * @param DateTime|null $dateDeleted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateDeleted($dateDeleted)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $dateDeleted = self::checkTypes($dateDeleted, $types);

        $this->dateDeleted = $dateDeleted;
    }

    /**
     * @return DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime|null $dateCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateCreated($dateCreated)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $dateCreated = self::checkTypes($dateCreated, $types);

        $this->dateCreated = $dateCreated;
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
