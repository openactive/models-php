<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MerchantReturnPolicySeasonalOverride extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MerchantReturnPolicySeasonalOverride";
    }

    public static function fieldList() {
        $fields = [
            "returnFees" => "returnFees",
            "returnMethod" => "returnMethod",
            "refundType" => "refundType",
            "returnShippingFeesAmount" => "returnShippingFeesAmount",
            "startDate" => "startDate",
            "merchantReturnDays" => "merchantReturnDays",
            "returnPolicyCategory" => "returnPolicyCategory",
            "endDate" => "endDate",
            "restockingFee" => "restockingFee",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $returnFees;

    /**
     * The type of return method offered, specified from an enumeration.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null
     */
    protected $returnMethod;

    /**
     * A refund type, from an enumerated list.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    protected $refundType;

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $returnShippingFeesAmount;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $startDate;

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     *
     * @var Date|DateTime|int|null
     */
    protected $merchantReturnDays;

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    protected $returnPolicyCategory;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $restockingFee;

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    public function getReturnFees()
    {
        return $this->returnFees;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null $returnFees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnFees($returnFees)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        ];

        $returnFees = self::checkTypes($returnFees, $types);

        $this->returnFees = $returnFees;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null
     */
    public function getReturnMethod()
    {
        return $this->returnMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null $returnMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnMethod($returnMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration",
            "null",
        ];

        $returnMethod = self::checkTypes($returnMethod, $types);

        $this->returnMethod = $returnMethod;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null $refundType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRefundType($refundType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\RefundTypeEnumeration",
            "null",
        ];

        $refundType = self::checkTypes($refundType, $types);

        $this->refundType = $refundType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getReturnShippingFeesAmount()
    {
        return $this->returnShippingFeesAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $returnShippingFeesAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnShippingFeesAmount($returnShippingFeesAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $returnShippingFeesAmount = self::checkTypes($returnShippingFeesAmount, $types);

        $this->returnShippingFeesAmount = $returnShippingFeesAmount;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return Date|DateTime|int|null
     */
    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    /**
     * @param Date|DateTime|int|null $merchantReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnDays($merchantReturnDays)
    {
        $types = [
            "Date",
            "DateTime",
            "int",
            "null",
        ];

        $merchantReturnDays = self::checkTypes($merchantReturnDays, $types);

        $this->merchantReturnDays = $merchantReturnDays;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null $returnPolicyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration",
            "null",
        ];

        $returnPolicyCategory = self::checkTypes($returnPolicyCategory, $types);

        $this->returnPolicyCategory = $returnPolicyCategory;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getRestockingFee()
    {
        return $this->restockingFee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $restockingFee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRestockingFee($restockingFee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $restockingFee = self::checkTypes($restockingFee, $types);

        $this->restockingFee = $restockingFee;
    }

}
