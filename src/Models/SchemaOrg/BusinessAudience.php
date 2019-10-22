<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusinessAudience extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * The age of the business.
     *
     *
     * @var QuantitativeValue
     */
    protected $yearsInOperation;

    /**
     * The size of the business in annual revenue.
     *
     *
     * @var QuantitativeValue
     */
    protected $yearlyRevenue;

    /**
     * The number of employees in an organization e.g. business.
     *
     *
     * @var QuantitativeValue
     */
    protected $numberOfEmployees;

    /**
     * @return QuantitativeValue
     */
    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    /**
     * @param QuantitativeValue $yearsInOperation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setYearsInOperation($yearsInOperation)
    {
        $types = array(
            "QuantitativeValue",
        );

        $yearsInOperation = self::checkTypes($yearsInOperation, $types);

        $this->yearsInOperation = $yearsInOperation;
    }

    /**
     * @return QuantitativeValue
     */
    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    /**
     * @param QuantitativeValue $yearlyRevenue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setYearlyRevenue($yearlyRevenue)
    {
        $types = array(
            "QuantitativeValue",
        );

        $yearlyRevenue = self::checkTypes($yearlyRevenue, $types);

        $this->yearlyRevenue = $yearlyRevenue;
    }

    /**
     * @return QuantitativeValue
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * @param QuantitativeValue $numberOfEmployees
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $types = array(
            "QuantitativeValue",
        );

        $numberOfEmployees = self::checkTypes($numberOfEmployees, $types);

        $this->numberOfEmployees = $numberOfEmployees;
    }

}
