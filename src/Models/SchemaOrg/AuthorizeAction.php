<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AuthorizeAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AuthorizeAction";
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
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $recipient;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

}
