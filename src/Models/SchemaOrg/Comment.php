<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Comment extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Comment";
    }

    public static function fieldList() {
        $fields = [
            "downvoteCount" => "downvoteCount",
            "upvoteCount" => "upvoteCount",
            "parentItem" => "parentItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     *
     *
     * @var int|null
     */
    protected $downvoteCount;

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     *
     *
     * @var int|null
     */
    protected $upvoteCount;

    /**
     * The parent of a question, answer or item in general.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment|string
     */
    protected $parentItem;

    /**
     * @return int|null
     */
    public function getDownvoteCount()
    {
        return $this->downvoteCount;
    }

    /**
     * @param int|null $downvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownvoteCount($downvoteCount)
    {
        $types = [
            "int",
            "null",
        ];

        $downvoteCount = self::checkTypes($downvoteCount, $types);

        $this->downvoteCount = $downvoteCount;
    }

    /**
     * @return int|null
     */
    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }

    /**
     * @param int|null $upvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUpvoteCount($upvoteCount)
    {
        $types = [
            "int",
            "null",
        ];

        $upvoteCount = self::checkTypes($upvoteCount, $types);

        $this->upvoteCount = $upvoteCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment|string
     */
    public function getParentItem()
    {
        return $this->parentItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment|string $parentItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentItem($parentItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
            "string",
        ];

        $parentItem = self::checkTypes($parentItem, $types);

        $this->parentItem = $parentItem;
    }

}
