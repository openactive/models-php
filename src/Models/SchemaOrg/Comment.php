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
            "parentItem" => "parentItem",
            "downvoteCount" => "downvoteCount",
            "sharedContent" => "sharedContent",
            "upvoteCount" => "upvoteCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Comment|string
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
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $sharedContent;

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     *
     *
     * @var int|null
     */
    protected $upvoteCount;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Comment|string
     */
    public function getParentItem()
    {
        return $this->parentItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Comment|string $parentItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentItem($parentItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Comment",
            "string",
        ];

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
        $types = [
            "int",
            "null",
        ];

        $downvoteCount = self::checkTypes($downvoteCount, $types);

        $this->downvoteCount = $downvoteCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getSharedContent()
    {
        return $this->sharedContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $sharedContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSharedContent($sharedContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $sharedContent = self::checkTypes($sharedContent, $types);

        $this->sharedContent = $sharedContent;
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

}
