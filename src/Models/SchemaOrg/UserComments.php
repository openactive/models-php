<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserComments extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * The text of the UserComment.
     *
     *
     * @var string
     */
    protected $commentText;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $discusses;

    /**
     * The time at which the UserComment was made.
     *
     *
     * @var DateTime|null
     */
    protected $commentTime;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var Person|Organization
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
     * @return DateTime|null
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * @param DateTime|null $commentTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentTime($commentTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $commentTime = self::checkTypes($commentTime, $types);

        $this->commentTime = $commentTime;
    }

    /**
     * @return Person|Organization
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param Person|Organization $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = array(
            "Person",
            "Organization",
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
