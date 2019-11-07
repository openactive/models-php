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

    /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $requiredCollateral;

    /**
     * The amount of money.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $amount;

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
     * The duration of the loan or credit agreement.
     *
     *
     * @var QuantitativeValue
     */
    protected $loanTerm;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        );

        $requiredCollateral = self::checkTypes($requiredCollateral, $types);

        $this->requiredCollateral = $requiredCollateral;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
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
     * @return QuantitativeValue
     */
    public function getLoanTerm()
    {
        return $this->loanTerm;
    }

    /**
     * @param QuantitativeValue $loanTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanTerm($loanTerm)
    {
        $types = array(
            "QuantitativeValue",
        );

        $loanTerm = self::checkTypes($loanTerm, $types);

        $this->loanTerm = $loanTerm;
    }

}
