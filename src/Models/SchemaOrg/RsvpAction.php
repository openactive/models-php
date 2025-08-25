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
     * @var Number|null
     */
    protected $additionalNumberOfGuests;

    /**
     * Comments, typically from users.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment|string
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
     * @return Number|null
     */
    public function getAdditionalNumberOfGuests()
    {
        return $this->additionalNumberOfGuests;
    }

    /**
     * @param Number|null $additionalNumberOfGuests
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalNumberOfGuests($additionalNumberOfGuests)
    {
        $types = [
            "Number",
            "null",
        ];

        $additionalNumberOfGuests = self::checkTypes($additionalNumberOfGuests, $types);

        $this->additionalNumberOfGuests = $additionalNumberOfGuests;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment|string $comment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComment($comment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
            "string",
        ];

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
        $types = [
            "\OpenActive\Enums\SchemaOrg\RsvpResponseType",
            "null",
        ];

        $rsvpResponse = self::checkTypes($rsvpResponse, $types);

        $this->rsvpResponse = $rsvpResponse;
    }

}
