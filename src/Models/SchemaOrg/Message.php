<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Message extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Message";
    }

    public static function fieldList() {
        $fields = [
            "sender" => "sender",
            "dateRead" => "dateRead",
            "toRecipient" => "toRecipient",
            "messageAttachment" => "messageAttachment",
            "recipient" => "recipient",
            "ccRecipient" => "ccRecipient",
            "dateSent" => "dateSent",
            "dateReceived" => "dateReceived",
            "bccRecipient" => "bccRecipient",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $sender;

    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateRead;

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $toRecipient;

    /**
     * A CreativeWork attached to the message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $messageAttachment;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience
     */
    protected $recipient;

    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $ccRecipient;

    /**
     * The date/time at which the message was sent.
     *
     *
     * @var DateTime|null
     */
    protected $dateSent;

    /**
     * The date/time the message was received if a single recipient exists.
     *
     *
     * @var DateTime|null
     */
    protected $dateReceived;

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $bccRecipient;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization $sender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSender($sender)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sender = self::checkTypes($sender, $types);

        $this->sender = $sender;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateRead()
    {
        return $this->dateRead;
    }

    /**
     * @param Date|DateTime|null $dateRead
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateRead($dateRead)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateRead = self::checkTypes($dateRead, $types);

        $this->dateRead = $dateRead;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getToRecipient()
    {
        return $this->toRecipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $toRecipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToRecipient($toRecipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $toRecipient = self::checkTypes($toRecipient, $types);

        $this->toRecipient = $toRecipient;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getMessageAttachment()
    {
        return $this->messageAttachment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $messageAttachment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMessageAttachment($messageAttachment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $messageAttachment = self::checkTypes($messageAttachment, $types);

        $this->messageAttachment = $messageAttachment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Audience",
        ];

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getCcRecipient()
    {
        return $this->ccRecipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $ccRecipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCcRecipient($ccRecipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $ccRecipient = self::checkTypes($ccRecipient, $types);

        $this->ccRecipient = $ccRecipient;
    }

    /**
     * @return DateTime|null
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * @param DateTime|null $dateSent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateSent($dateSent)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $dateSent = self::checkTypes($dateSent, $types);

        $this->dateSent = $dateSent;
    }

    /**
     * @return DateTime|null
     */
    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    /**
     * @param DateTime|null $dateReceived
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateReceived($dateReceived)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $dateReceived = self::checkTypes($dateReceived, $types);

        $this->dateReceived = $dateReceived;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getBccRecipient()
    {
        return $this->bccRecipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint $bccRecipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBccRecipient($bccRecipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $bccRecipient = self::checkTypes($bccRecipient, $types);

        $this->bccRecipient = $bccRecipient;
    }

}
