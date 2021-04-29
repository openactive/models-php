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
            "creator" => "creator",
            "discusses" => "discusses",
            "replyToUrl" => "replyToUrl",
            "commentTime" => "commentTime",
            "commentText" => "commentText",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $creator;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $discusses;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     *
     * @var string
     */
    protected $replyToUrl;

    /**
     * The time at which the UserComment was made.
     *
     *
     * @var Date|DateTime|null
     */
    protected $commentTime;

    /**
     * The text of the UserComment.
     *
     *
     * @var string
     */
    protected $commentText;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getDiscusses()
    {
        return $this->discusses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $discusses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscusses($discusses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $discusses = self::checkTypes($discusses, $types);

        $this->discusses = $discusses;
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

}
