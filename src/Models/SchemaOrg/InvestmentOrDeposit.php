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

    public static function fieldList() {
        $fields = [
            "amount" => "amount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The amount of money.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|float|null
     */
    protected $amount;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|float|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "float",
            "null",
        );

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
    }

}
