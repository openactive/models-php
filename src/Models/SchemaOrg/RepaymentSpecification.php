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
            "loanPaymentFrequency" => "loanPaymentFrequency",
            "earlyPrepaymentPenalty" => "earlyPrepaymentPenalty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
     *
     *
     * @var float|null
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
     * @var float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $downPayment;

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
     *
     *
     * @var float|null
     */
    protected $loanPaymentFrequency;

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $earlyPrepaymentPenalty;

    /**
     * @return float|null
     */
    public function getNumberOfLoanPayments()
    {
        return $this->numberOfLoanPayments;
    }

    /**
     * @param float|null $numberOfLoanPayments
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfLoanPayments($numberOfLoanPayments)
    {
        $types = array(
            "float",
            "null",
        );

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $loanPaymentAmount = self::checkTypes($loanPaymentAmount, $types);

        $this->loanPaymentAmount = $loanPaymentAmount;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getDownPayment()
    {
        return $this->downPayment;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $downPayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownPayment($downPayment)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $downPayment = self::checkTypes($downPayment, $types);

        $this->downPayment = $downPayment;
    }

    /**
     * @return float|null
     */
    public function getLoanPaymentFrequency()
    {
        return $this->loanPaymentFrequency;
    }

    /**
     * @param float|null $loanPaymentFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanPaymentFrequency($loanPaymentFrequency)
    {
        $types = array(
            "float",
            "null",
        );

        $loanPaymentFrequency = self::checkTypes($loanPaymentFrequency, $types);

        $this->loanPaymentFrequency = $loanPaymentFrequency;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $earlyPrepaymentPenalty = self::checkTypes($earlyPrepaymentPenalty, $types);

        $this->earlyPrepaymentPenalty = $earlyPrepaymentPenalty;
    }

}
