<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [PriceSpecification](https://schema.org/PriceSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PaymentChargeSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentChargeSpecification";
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     *
     * @var \OpenActive\Enums\DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     *
     * @var \OpenActive\Enums\PaymentMethod|null
     */
    protected $appliesToPaymentMethod;

    /**
     * @return \OpenActive\Enums\DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\DeliveryMethod|null $appliesToDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\DeliveryMethod",
            "null",
        );

        $appliesToDeliveryMethod = self::checkTypes($appliesToDeliveryMethod, $types);

        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }

    /**
     * @return \OpenActive\Enums\PaymentMethod|null
     */
    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    /**
     * @param \OpenActive\Enums\PaymentMethod|null $appliesToPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $types = array(
            "\OpenActive\Enums\PaymentMethod",
            "null",
        );

        $appliesToPaymentMethod = self::checkTypes($appliesToPaymentMethod, $types);

        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }

}
