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
    public static function getType()
    {
        return "schema:FinancialProduct";
    }

    public static function fieldList() {
        $fields = [
            "feesAndCommissionsSpecification" => "feesAndCommissionsSpecification",
            "interestRate" => "interestRate",
            "annualPercentageRate" => "annualPercentageRate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $interestRate;

    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $annualPercentageRate;

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
        $types = [
            "string",
        ];

        $feesAndCommissionsSpecification = self::checkTypes($feesAndCommissionsSpecification, $types);

        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $interestRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInterestRate($interestRate)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        ];

        $interestRate = self::checkTypes($interestRate, $types);

        $this->interestRate = $interestRate;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getAnnualPercentageRate()
    {
        return $this->annualPercentageRate;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $annualPercentageRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnnualPercentageRate($annualPercentageRate)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        ];

        $annualPercentageRate = self::checkTypes($annualPercentageRate, $types);

        $this->annualPercentageRate = $annualPercentageRate;
    }

}
