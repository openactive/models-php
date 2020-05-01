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
            "requiredCollateral" => "requiredCollateral",
            "recourseLoan" => "recourseLoan",
            "gracePeriod" => "gracePeriod",
            "renegotiableLoan" => "renegotiableLoan",
            "loanRepaymentForm" => "loanRepaymentForm",
            "loanType" => "loanType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of the loan or credit agreement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $loanTerm;

    /**
     * The currency in which the monetary amount is expressed.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

    /**
     * The amount of money.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|float|null
     */
    protected $amount;

    /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $requiredCollateral;

    /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
     *
     *
     * @var bool|null
     */
    protected $recourseLoan;

    /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
     *
     *
     * @var DateInterval|null
     */
    protected $gracePeriod;

    /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
     *
     *
     * @var bool|null
     */
    protected $renegotiableLoan;

    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\RepaymentSpecification
     */
    protected $loanRepaymentForm;

    /**
     * The type of a loan or credit.
     *
     *
     * @var string
     */
    protected $loanType;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getLoanTerm()
    {
        return $this->loanTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $loanTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanTerm($loanTerm)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

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
        $types = array(
            "string",
        );

        $currency = self::checkTypes($currency, $types);

        $this->currency = $currency;
    }

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

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getRequiredCollateral()
    {
        return $this->requiredCollateral;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $requiredCollateral
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredCollateral($requiredCollateral)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $requiredCollateral = self::checkTypes($requiredCollateral, $types);

        $this->requiredCollateral = $requiredCollateral;
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
        $types = array(
            "bool",
            "null",
        );

        $recourseLoan = self::checkTypes($recourseLoan, $types);

        $this->recourseLoan = $recourseLoan;
    }

    /**
     * @return DateInterval|null
     */
    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    /**
     * @param DateInterval|null $gracePeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGracePeriod($gracePeriod)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $gracePeriod = self::checkTypes($gracePeriod, $types);

        $this->gracePeriod = $gracePeriod;
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
        $types = array(
            "bool",
            "null",
        );

        $renegotiableLoan = self::checkTypes($renegotiableLoan, $types);

        $this->renegotiableLoan = $renegotiableLoan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\RepaymentSpecification
     */
    public function getLoanRepaymentForm()
    {
        return $this->loanRepaymentForm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\RepaymentSpecification $loanRepaymentForm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanRepaymentForm($loanRepaymentForm)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\RepaymentSpecification",
        );

        $loanRepaymentForm = self::checkTypes($loanRepaymentForm, $types);

        $this->loanRepaymentForm = $loanRepaymentForm;
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
        $types = array(
            "string",
        );

        $loanType = self::checkTypes($loanType, $types);

        $this->loanType = $loanType;
    }

}
