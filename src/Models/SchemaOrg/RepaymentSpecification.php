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
            "earlyPrepaymentPenalty" => "earlyPrepaymentPenalty",
            "numberOfLoanPayments" => "numberOfLoanPayments",
            "loanPaymentFrequency" => "loanPaymentFrequency",
            "downPayment" => "downPayment",
            "loanPaymentAmount" => "loanPaymentAmount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $earlyPrepaymentPenalty;

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
     *
     *
     * @var null|float
     */
    protected $numberOfLoanPayments;

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
     *
     *
     * @var null|float
     */
    protected $loanPaymentFrequency;

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|null|float
     */
    protected $downPayment;

    /**
     * The amount of money to pay in a single payment.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $loanPaymentAmount;

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

    /**
     * @return null|float
     */
    public function getNumberOfLoanPayments()
    {
        return $this->numberOfLoanPayments;
    }

    /**
     * @param null|float $numberOfLoanPayments
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfLoanPayments($numberOfLoanPayments)
    {
        $types = array(
            "null",
            "float",
        );

        $numberOfLoanPayments = self::checkTypes($numberOfLoanPayments, $types);

        $this->numberOfLoanPayments = $numberOfLoanPayments;
    }

    /**
     * @return null|float
     */
    public function getLoanPaymentFrequency()
    {
        return $this->loanPaymentFrequency;
    }

    /**
     * @param null|float $loanPaymentFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanPaymentFrequency($loanPaymentFrequency)
    {
        $types = array(
            "null",
            "float",
        );

        $loanPaymentFrequency = self::checkTypes($loanPaymentFrequency, $types);

        $this->loanPaymentFrequency = $loanPaymentFrequency;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|null|float
     */
    public function getDownPayment()
    {
        return $this->downPayment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|null|float $downPayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownPayment($downPayment)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
            "float",
        );

        $downPayment = self::checkTypes($downPayment, $types);

        $this->downPayment = $downPayment;
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

}
