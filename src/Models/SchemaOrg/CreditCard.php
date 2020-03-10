<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CreditCard extends \OpenActive\Models\SchemaOrg\PaymentCard
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CreditCard";
    }

    public static function fieldList() {
        $fields = [
            "monthlyMinimumRepaymentAmount" => "monthlyMinimumRepaymentAmount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $monthlyMinimumRepaymentAmount;

    /**
     * @return float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getMonthlyMinimumRepaymentAmount()
    {
        return $this->monthlyMinimumRepaymentAmount;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $monthlyMinimumRepaymentAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMonthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $monthlyMinimumRepaymentAmount = self::checkTypes($monthlyMinimumRepaymentAmount, $types);

        $this->monthlyMinimumRepaymentAmount = $monthlyMinimumRepaymentAmount;
    }

}
