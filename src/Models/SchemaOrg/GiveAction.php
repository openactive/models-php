<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GiveAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GiveAction";
    }

    public static function fieldList() {
        $fields = [
            "recipient" => "recipient",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $recipient;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string $recipient
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
            "string",
        ];

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

}
