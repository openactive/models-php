<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReceiveAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     *
     * @var Schema.NET.DeliveryMethod|null
     */
    protected $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    protected $sender;

    /**
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $deliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
            "null",
        );

        $deliveryMethod = self::checkTypes($deliveryMethod, $types);

        $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\Audience|Organization $sender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSender($sender)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\Audience",
            "Organization",
        );

        $sender = self::checkTypes($sender, $types);

        $this->sender = $sender;
    }

}
