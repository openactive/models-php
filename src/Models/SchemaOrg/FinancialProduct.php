<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FinancialProduct extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:FinancialProduct";
    }

    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
     *
     *
     * @var decimal|QuantitativeValue|null
     */
    protected $annualPercentageRate;

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     *
     *
     * @var string
     */
    protected $feesAndCommissionsSpecification;

    /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
     *
     *
     * @var decimal|QuantitativeValue|null
     */
    protected $interestRate;

    /**
     * @return decimal|QuantitativeValue|null
     */
    public function getAnnualPercentageRate()
    {
        return $this->annualPercentageRate;
    }

    /**
     * @param decimal|QuantitativeValue|null $annualPercentageRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnnualPercentageRate($annualPercentageRate)
    {
        $types = array(
            "decimal",
            "QuantitativeValue",
            "null",
        );

        $annualPercentageRate = self::checkTypes($annualPercentageRate, $types);

        $this->annualPercentageRate = $annualPercentageRate;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return decimal|QuantitativeValue|null
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * @param decimal|QuantitativeValue|null $interestRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInterestRate($interestRate)
    {
        $types = array(
            "decimal",
            "QuantitativeValue",
            "null",
        );

        $interestRate = self::checkTypes($interestRate, $types);

        $this->interestRate = $interestRate;
    }

}
