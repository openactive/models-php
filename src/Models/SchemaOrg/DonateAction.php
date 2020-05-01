<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DonateAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DonateAction";
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
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience
     */
    protected $recipient;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

}
