<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RsvpAction extends \OpenActive\Models\SchemaOrg\InformAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RsvpAction";
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     *
     *
     * @var decimal|null
     */
    protected $additionalNumberOfGuests;

    /**
     * Comments, typically from users.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment
     */
    protected $comment;

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     *
     * @var Schema.NET.RsvpResponseType|null
     */
    protected $rsvpResponse;

    /**
     * @return decimal|null
     */
    public function getAdditionalNumberOfGuests()
    {
        return $this->additionalNumberOfGuests;
    }

    /**
     * @param decimal|null $additionalNumberOfGuests
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalNumberOfGuests($additionalNumberOfGuests)
    {
        $types = array(
            "decimal",
            "null",
        );

        $additionalNumberOfGuests = self::checkTypes($additionalNumberOfGuests, $types);

        $this->additionalNumberOfGuests = $additionalNumberOfGuests;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment $comment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComment($comment)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Comment",
        );

        $comment = self::checkTypes($comment, $types);

        $this->comment = $comment;
    }

    /**
     * @return Schema.NET.RsvpResponseType|null
     */
    public function getRsvpResponse()
    {
        return $this->rsvpResponse;
    }

    /**
     * @param Schema.NET.RsvpResponseType|null $rsvpResponse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRsvpResponse($rsvpResponse)
    {
        $types = array(
            "Schema.NET.RsvpResponseType",
            "null",
        );

        $rsvpResponse = self::checkTypes($rsvpResponse, $types);

        $this->rsvpResponse = $rsvpResponse;
    }

}
