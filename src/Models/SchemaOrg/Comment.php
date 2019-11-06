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
     * @var \OpenActive\Models\SchemaOrg\Question
     */
    protected $parentItem;

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     *
     *
     * @var int|null
     */
    protected $downvoteCount;

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
        $types = array(
            "int",
            "null",
        );

        $upvoteCount = self::checkTypes($upvoteCount, $types);

        $this->upvoteCount = $upvoteCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Question
     */
    public function getParentItem()
    {
        return $this->parentItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Question $parentItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentItem($parentItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Question",
        );

        $parentItem = self::checkTypes($parentItem, $types);

        $this->parentItem = $parentItem;
    }

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
        $types = array(
            "int",
            "null",
        );

        $downvoteCount = self::checkTypes($downvoteCount, $types);

        $this->downvoteCount = $downvoteCount;
    }

}
