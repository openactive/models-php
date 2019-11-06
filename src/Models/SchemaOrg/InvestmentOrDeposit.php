<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InvestmentOrDeposit extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InvestmentOrDeposit";
    }

    /**
     * The amount of money.
     *
     *
     * @var decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $amount;

    /**
     * @return decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = array(
            "decimal",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
    }

}
