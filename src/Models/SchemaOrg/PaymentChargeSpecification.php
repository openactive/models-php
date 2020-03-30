<?php

namespace OpenActive\Models\SchemaOrg;

/**
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

    public static function fieldList() {
        $fields = [
            "appliesToPaymentMethod" => "appliesToPaymentMethod",
            "appliesToDeliveryMethod" => "appliesToDeliveryMethod",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $appliesToPaymentMethod;

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;

    /**
     * @return \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PaymentMethod|null $appliesToPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "null",
        );

        $appliesToPaymentMethod = self::checkTypes($appliesToPaymentMethod, $types);

        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $appliesToDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        );

        $appliesToDeliveryMethod = self::checkTypes($appliesToDeliveryMethod, $types);

        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }

}
