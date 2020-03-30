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
            "discusses" => "discusses",
            "commentText" => "commentText",
            "commentTime" => "commentTime",
            "creator" => "creator",
            "replyToUrl" => "replyToUrl",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $discusses;

    /**
     * The text of the UserComment.
     *
     *
     * @var string
     */
    protected $commentText;

    /**
     * The time at which the UserComment was made.
     *
     *
     * @var null|DateTime|Date
     */
    protected $commentTime;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $creator;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     *
     * @var string
     */
    protected $replyToUrl;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $discusses = self::checkTypes($discusses, $types);

        $this->discusses = $discusses;
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
        $types = array(
            "string",
        );

        $commentText = self::checkTypes($commentText, $types);

        $this->commentText = $commentText;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * @param null|DateTime|Date $commentTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentTime($commentTime)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $commentTime = self::checkTypes($commentTime, $types);

        $this->commentTime = $commentTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
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
        $types = array(
            "string",
        );

        $replyToUrl = self::checkTypes($replyToUrl, $types);

        $this->replyToUrl = $replyToUrl;
    }

}
