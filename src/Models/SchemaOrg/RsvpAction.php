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

    public static function fieldList() {
        $fields = [
            "additionalNumberOfGuests" => "additionalNumberOfGuests",
            "comment" => "comment",
            "rsvpResponse" => "rsvpResponse",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     *
     *
     * @var null|float
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
     * @var \OpenActive\Enums\SchemaOrg\RsvpResponseType|null
     */
    protected $rsvpResponse;

    /**
     * @return null|float
     */
    public function getAdditionalNumberOfGuests()
    {
        return $this->additionalNumberOfGuests;
    }

    /**
     * @param null|float $additionalNumberOfGuests
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalNumberOfGuests($additionalNumberOfGuests)
    {
        $types = array(
            "null",
            "float",
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
     * @return \OpenActive\Enums\SchemaOrg\RsvpResponseType|null
     */
    public function getRsvpResponse()
    {
        return $this->rsvpResponse;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\RsvpResponseType|null $rsvpResponse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRsvpResponse($rsvpResponse)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\RsvpResponseType",
            "null",
        );

        $rsvpResponse = self::checkTypes($rsvpResponse, $types);

        $this->rsvpResponse = $rsvpResponse;
    }

}
