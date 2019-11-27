<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BankAccount extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BankAccount";
    }

    public static function fieldList() {
        $fields = [
            "accountOverdraftLimit" => "accountOverdraftLimit",
            "accountMinimumInflow" => "accountMinimumInflow",
            "bankAccountType" => "bankAccountType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $accountOverdraftLimit;

    /**
     * A minimum amount that has to be paid in every month.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $accountMinimumInflow;

    /**
     * The type of a bank account.
     *
     *
     * @var string
     */
    protected $bankAccountType;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getAccountOverdraftLimit()
    {
        return $this->accountOverdraftLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $accountOverdraftLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountOverdraftLimit($accountOverdraftLimit)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $accountOverdraftLimit = self::checkTypes($accountOverdraftLimit, $types);

        $this->accountOverdraftLimit = $accountOverdraftLimit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getAccountMinimumInflow()
    {
        return $this->accountMinimumInflow;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $accountMinimumInflow
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountMinimumInflow($accountMinimumInflow)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $accountMinimumInflow = self::checkTypes($accountMinimumInflow, $types);

        $this->accountMinimumInflow = $accountMinimumInflow;
    }

    /**
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    /**
     * @param string $bankAccountType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBankAccountType($bankAccountType)
    {
        $types = array(
            "string",
        );

        $bankAccountType = self::checkTypes($bankAccountType, $types);

        $this->bankAccountType = $bankAccountType;
    }

}
