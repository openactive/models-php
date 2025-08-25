<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LoanOrCredit extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LoanOrCredit";
    }

    public static function fieldList() {
        $fields = [
            "loanTerm" => "loanTerm",
            "currency" => "currency",
            "amount" => "amount",
            "loanType" => "loanType",
            "recourseLoan" => "recourseLoan",
            "renegotiableLoan" => "renegotiableLoan",
            "gracePeriod" => "gracePeriod",
            "loanRepaymentForm" => "loanRepaymentForm",
            "requiredCollateral" => "requiredCollateral",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of the loan or credit agreement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $loanTerm;

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

    /**
     * The amount of money.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $amount;

    /**
     * The type of a loan or credit.
     *
     *
     * @var string
     */
    protected $loanType;

    /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
     *
     *
     * @var bool|null
     */
    protected $recourseLoan;

    /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
     *
     *
     * @var bool|null
     */
    protected $renegotiableLoan;

    /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
     *
     *
     * @var DateInterval|string|null
     */
    protected $gracePeriod;

    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\RepaymentSpecification|string
     */
    protected $loanRepaymentForm;

    /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $requiredCollateral;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getLoanTerm()
    {
        return $this->loanTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $loanTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanTerm($loanTerm)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $loanTerm = self::checkTypes($loanTerm, $types);

        $this->loanTerm = $loanTerm;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrency($currency)
    {
        $types = [
            "string",
        ];

        $currency = self::checkTypes($currency, $types);

        $this->currency = $currency;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getLoanType()
    {
        return $this->loanType;
    }

    /**
     * @param string $loanType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanType($loanType)
    {
        $types = [
            "string",
        ];

        $loanType = self::checkTypes($loanType, $types);

        $this->loanType = $loanType;
    }

    /**
     * @return bool|null
     */
    public function getRecourseLoan()
    {
        return $this->recourseLoan;
    }

    /**
     * @param bool|null $recourseLoan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecourseLoan($recourseLoan)
    {
        $types = [
            "bool",
            "null",
        ];

        $recourseLoan = self::checkTypes($recourseLoan, $types);

        $this->recourseLoan = $recourseLoan;
    }

    /**
     * @return bool|null
     */
    public function getRenegotiableLoan()
    {
        return $this->renegotiableLoan;
    }

    /**
     * @param bool|null $renegotiableLoan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRenegotiableLoan($renegotiableLoan)
    {
        $types = [
            "bool",
            "null",
        ];

        $renegotiableLoan = self::checkTypes($renegotiableLoan, $types);

        $this->renegotiableLoan = $renegotiableLoan;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    /**
     * @param DateInterval|string|null $gracePeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGracePeriod($gracePeriod)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $gracePeriod = self::checkTypes($gracePeriod, $types);

        $this->gracePeriod = $gracePeriod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\RepaymentSpecification|string
     */
    public function getLoanRepaymentForm()
    {
        return $this->loanRepaymentForm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\RepaymentSpecification|string $loanRepaymentForm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanRepaymentForm($loanRepaymentForm)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\RepaymentSpecification",
            "string",
        ];

        $loanRepaymentForm = self::checkTypes($loanRepaymentForm, $types);

        $this->loanRepaymentForm = $loanRepaymentForm;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getRequiredCollateral()
    {
        return $this->requiredCollateral;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $requiredCollateral
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredCollateral($requiredCollateral)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $requiredCollateral = self::checkTypes($requiredCollateral, $types);

        $this->requiredCollateral = $requiredCollateral;
    }

}
