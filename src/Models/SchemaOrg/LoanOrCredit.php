<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class LoanOrCredit extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * The duration of the loan or credit agreement.
     *
     *
     * @var QuantitativeValue
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
     * @var decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
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
     * @return QuantitativeValue
     */
    public function getLoanTerm()
    {
        return $this->loanTerm;
    }

    /**
     * @param QuantitativeValue $loanTerm
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLoanTerm($loanTerm)
    {
        $types = array(
            "QuantitativeValue",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $amount
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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

}
