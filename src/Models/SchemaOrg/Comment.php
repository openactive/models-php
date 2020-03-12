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
            "upvoteCount" => "upvoteCount",
            "parentItem" => "parentItem",
            "downvoteCount" => "downvoteCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     *
     *
     * @var null|int
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
     * @var null|int
     */
    protected $downvoteCount;

    /**
     * @return null|int
     */
    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }

    /**
     * @param null|int $upvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUpvoteCount($upvoteCount)
    {
        $types = array(
            "null",
            "int",
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
     * @return null|int
     */
    public function getDownvoteCount()
    {
        return $this->downvoteCount;
    }

    /**
     * @param null|int $downvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownvoteCount($downvoteCount)
    {
        $types = array(
            "null",
            "int",
        );

        $downvoteCount = self::checkTypes($downvoteCount, $types);

        $this->downvoteCount = $downvoteCount;
    }

}
