<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
