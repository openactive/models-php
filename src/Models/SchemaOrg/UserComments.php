<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserComments extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserComments";
    }

    public static function fieldList() {
        $fields = [
            "commentTime" => "commentTime",
            "discusses" => "discusses",
            "creator" => "creator",
            "commentText" => "commentText",
            "replyToUrl" => "replyToUrl",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The time at which the UserComment was made.
     *
     *
     * @var Date|DateTime|null
     */
    protected $commentTime;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $discusses;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $creator;

    /**
     * The text of the UserComment.
     *
     *
     * @var string
     */
    protected $commentText;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     *
     * @var string
     */
    protected $replyToUrl;

    /**
     * @return Date|DateTime|null
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * @param Date|DateTime|null $commentTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentTime($commentTime)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $commentTime = self::checkTypes($commentTime, $types);

        $this->commentTime = $commentTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getDiscusses()
    {
        return $this->discusses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $discusses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscusses($discusses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $discusses = self::checkTypes($discusses, $types);

        $this->discusses = $discusses;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * @param string $commentText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentText($commentText)
    {
        $types = [
            "string",
        ];

        $commentText = self::checkTypes($commentText, $types);

        $this->commentText = $commentText;
    }

    /**
     * @return string
     */
    public function getReplyToUrl()
    {
        return $this->replyToUrl;
    }

    /**
     * @param string $replyToUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReplyToUrl($replyToUrl)
    {
        $types = [
            "string",
        ];

        $replyToUrl = self::checkTypes($replyToUrl, $types);

        $this->replyToUrl = $replyToUrl;
    }

}
