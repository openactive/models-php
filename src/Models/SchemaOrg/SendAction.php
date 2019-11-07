<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SendAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SendAction";
    }

    /**
     * A sub property of instrument. The method of delivery.
     *
     *
     * @var \OpenActive\Enums\DeliveryMethod|null
     */
    protected $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|\OpenActive\Models\SchemaOrg\Audience
     */
    protected $recipient;

    /**
     * @return \OpenActive\Enums\DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\DeliveryMethod|null $deliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\DeliveryMethod",
            "null",
        );

        $deliveryMethod = self::checkTypes($deliveryMethod, $types);

        $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|\OpenActive\Models\SchemaOrg\Audience
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|\OpenActive\Models\SchemaOrg\Audience $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "Organization",
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

}
