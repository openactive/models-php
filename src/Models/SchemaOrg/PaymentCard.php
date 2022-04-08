<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PaymentCard extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentCard";
    }

    public static function fieldList() {
        $fields = [
            "cashBack" => "cashBack",
            "monthlyMinimumRepaymentAmount" => "monthlyMinimumRepaymentAmount",
            "floorLimit" => "floorLimit",
            "contactlessPayment" => "contactlessPayment",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     *
     *
     * @var bool|Number|null
     */
    protected $cashBack;

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $monthlyMinimumRepaymentAmount;

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $floorLimit;

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     *
     *
     * @var bool|null
     */
    protected $contactlessPayment;

    /**
     * @return bool|Number|null
     */
    public function getCashBack()
    {
        return $this->cashBack;
    }

    /**
     * @param bool|Number|null $cashBack
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCashBack($cashBack)
    {
        $types = [
            "bool",
            "Number",
            "null",
        ];

        $cashBack = self::checkTypes($cashBack, $types);

        $this->cashBack = $cashBack;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getMonthlyMinimumRepaymentAmount()
    {
        return $this->monthlyMinimumRepaymentAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $monthlyMinimumRepaymentAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMonthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $monthlyMinimumRepaymentAmount = self::checkTypes($monthlyMinimumRepaymentAmount, $types);

        $this->monthlyMinimumRepaymentAmount = $monthlyMinimumRepaymentAmount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getFloorLimit()
    {
        return $this->floorLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $floorLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorLimit($floorLimit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $floorLimit = self::checkTypes($floorLimit, $types);

        $this->floorLimit = $floorLimit;
    }

    /**
     * @return bool|null
     */
    public function getContactlessPayment()
    {
        return $this->contactlessPayment;
    }

    /**
     * @param bool|null $contactlessPayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactlessPayment($contactlessPayment)
    {
        $types = [
            "bool",
            "null",
        ];

        $contactlessPayment = self::checkTypes($contactlessPayment, $types);

        $this->contactlessPayment = $contactlessPayment;
    }

}
