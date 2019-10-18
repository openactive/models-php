<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Thing](https://schema.org/Thing), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Payment extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * The identifier of the payment held by the Broker and/or Payment Provider.
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * Optional free text description of the payment method for the Booking System, to help the Seller in discussions with the Customer (e.g. 'AcmeBroker Points' or 'AcmeBroker via Credit Card').
     *
     *
     * @var string
     */
    protected $name;

    /**
     * A reference used by the Seller to group transactions, which is used to aid reconciliation.
     *
     *
     * @var string
     */
    protected $accountId;

    /**
     * paymentMethod must not be used, and is reserved for future versions of this specification.
     *
     *
     * @var Schema.NET.PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * A reference to the specific Payment Provider that is used.
     *
     *
     * @var string
     */
    protected $paymentProviderId;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAccountId($accountId)
    {
        $types = array(
            "string",
        );

        $accountId = self::checkTypes($accountId, $types);

        $this->accountId = $accountId;
    }

    /**
     * @return Schema.NET.PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param Schema.NET.PaymentMethod|null $paymentMethod
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPaymentMethod($paymentMethod)
    {
        $types = array(
            "Schema.NET.PaymentMethod",
            "null",
        );

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return string
     */
    public function getPaymentProviderId()
    {
        return $this->paymentProviderId;
    }

    /**
     * @param string $paymentProviderId
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPaymentProviderId($paymentProviderId)
    {
        $types = array(
            "string",
        );

        $paymentProviderId = self::checkTypes($paymentProviderId, $types);

        $this->paymentProviderId = $paymentProviderId;
    }

}
