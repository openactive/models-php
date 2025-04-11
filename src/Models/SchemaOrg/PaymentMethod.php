<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PaymentMethod extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentMethod";
    }

    public static function fieldList() {
        $fields = [
            "paymentMethodType" => "paymentMethodType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of a payment method.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethodType|null
     */
    protected $paymentMethodType;

    /**
     * @return \OpenActive\Enums\SchemaOrg\PaymentMethodType|null
     */
    public function getPaymentMethodType()
    {
        return $this->paymentMethodType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PaymentMethodType|null $paymentMethodType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethodType($paymentMethodType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PaymentMethodType",
            "null",
        ];

        $paymentMethodType = self::checkTypes($paymentMethodType, $types);

        $this->paymentMethodType = $paymentMethodType;
    }

}
