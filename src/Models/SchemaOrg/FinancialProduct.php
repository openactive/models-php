<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class FinancialProduct extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
     *
     *
     * @var QuantitativeValue|decimal|null
     */
    protected $interestRate;

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     *
     *
     * @var string
     */
    protected $feesAndCommissionsSpecification;

    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
     *
     *
     * @var QuantitativeValue|decimal|null
     */
    protected $annualPercentageRate;

    /**
     * @return QuantitativeValue|decimal|null
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * @param QuantitativeValue|decimal|null $interestRate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setInterestRate($interestRate)
    {
        $types = array(
            "QuantitativeValue",
            "decimal",
            "null",
        );

        $interestRate = self::checkTypes($interestRate, $types);

        $this->interestRate = $interestRate;
    }

    /**
     * @return string
     */
    public function getFeesAndCommissionsSpecification()
    {
        return $this->feesAndCommissionsSpecification;
    }

    /**
     * @param string $feesAndCommissionsSpecification
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification)
    {
        $types = array(
            "string",
        );

        $feesAndCommissionsSpecification = self::checkTypes($feesAndCommissionsSpecification, $types);

        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }

    /**
     * @return QuantitativeValue|decimal|null
     */
    public function getAnnualPercentageRate()
    {
        return $this->annualPercentageRate;
    }

    /**
     * @param QuantitativeValue|decimal|null $annualPercentageRate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAnnualPercentageRate($annualPercentageRate)
    {
        $types = array(
            "QuantitativeValue",
            "decimal",
            "null",
        );

        $annualPercentageRate = self::checkTypes($annualPercentageRate, $types);

        $this->annualPercentageRate = $annualPercentageRate;
    }

}
