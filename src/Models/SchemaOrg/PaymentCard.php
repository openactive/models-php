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
            "floorLimit" => "floorLimit",
            "monthlyMinimumRepaymentAmount" => "monthlyMinimumRepaymentAmount",
            "contactlessPayment" => "contactlessPayment",
            "cashBack" => "cashBack",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $floorLimit;

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $monthlyMinimumRepaymentAmount;

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     *
     *
     * @var bool|null
     */
    protected $contactlessPayment;

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     *
     *
     * @var bool|Number|null
     */
    protected $cashBack;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getFloorLimit()
    {
        return $this->floorLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $floorLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorLimit($floorLimit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $floorLimit = self::checkTypes($floorLimit, $types);

        $this->floorLimit = $floorLimit;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getMonthlyMinimumRepaymentAmount()
    {
        return $this->monthlyMinimumRepaymentAmount;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $monthlyMinimumRepaymentAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMonthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        ];

        $monthlyMinimumRepaymentAmount = self::checkTypes($monthlyMinimumRepaymentAmount, $types);

        $this->monthlyMinimumRepaymentAmount = $monthlyMinimumRepaymentAmount;
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

}
