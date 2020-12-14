<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RepaymentSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RepaymentSpecification";
    }

    public static function fieldList() {
        $fields = [
            "numberOfLoanPayments" => "numberOfLoanPayments",
            "loanPaymentAmount" => "loanPaymentAmount",
            "downPayment" => "downPayment",
            "earlyPrepaymentPenalty" => "earlyPrepaymentPenalty",
            "loanPaymentFrequency" => "loanPaymentFrequency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
     *
     *
     * @var Number|null
     */
    protected $numberOfLoanPayments;

    /**
     * The amount of money to pay in a single payment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $loanPaymentAmount;

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $downPayment;

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $earlyPrepaymentPenalty;

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
     *
     *
     * @var Number|null
     */
    protected $loanPaymentFrequency;

    /**
     * @return Number|null
     */
    public function getNumberOfLoanPayments()
    {
        return $this->numberOfLoanPayments;
    }

    /**
     * @param Number|null $numberOfLoanPayments
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfLoanPayments($numberOfLoanPayments)
    {
        $types = [
            "Number",
            "null",
        ];

        $numberOfLoanPayments = self::checkTypes($numberOfLoanPayments, $types);

        $this->numberOfLoanPayments = $numberOfLoanPayments;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getLoanPaymentAmount()
    {
        return $this->loanPaymentAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $loanPaymentAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanPaymentAmount($loanPaymentAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $loanPaymentAmount = self::checkTypes($loanPaymentAmount, $types);

        $this->loanPaymentAmount = $loanPaymentAmount;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getDownPayment()
    {
        return $this->downPayment;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $downPayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownPayment($downPayment)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        ];

        $downPayment = self::checkTypes($downPayment, $types);

        $this->downPayment = $downPayment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getEarlyPrepaymentPenalty()
    {
        return $this->earlyPrepaymentPenalty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $earlyPrepaymentPenalty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEarlyPrepaymentPenalty($earlyPrepaymentPenalty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $earlyPrepaymentPenalty = self::checkTypes($earlyPrepaymentPenalty, $types);

        $this->earlyPrepaymentPenalty = $earlyPrepaymentPenalty;
    }

    /**
     * @return Number|null
     */
    public function getLoanPaymentFrequency()
    {
        return $this->loanPaymentFrequency;
    }

    /**
     * @param Number|null $loanPaymentFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanPaymentFrequency($loanPaymentFrequency)
    {
        $types = [
            "Number",
            "null",
        ];

        $loanPaymentFrequency = self::checkTypes($loanPaymentFrequency, $types);

        $this->loanPaymentFrequency = $loanPaymentFrequency;
    }

}
