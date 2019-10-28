<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [PriceSpecification](https://schema.org/PriceSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PaymentChargeSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     *
     * @var Schema.NET.PaymentMethod|null
     */
    protected $appliesToPaymentMethod;

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     *
     * @var Schema.NET.DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;

    /**
     * @return Schema.NET.PaymentMethod|null
     */
    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    /**
     * @param Schema.NET.PaymentMethod|null $appliesToPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $types = array(
            "Schema.NET.PaymentMethod",
            "null",
        );

        $appliesToPaymentMethod = self::checkTypes($appliesToPaymentMethod, $types);

        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }

    /**
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $appliesToDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
            "null",
        );

        $appliesToDeliveryMethod = self::checkTypes($appliesToDeliveryMethod, $types);

        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }

}
