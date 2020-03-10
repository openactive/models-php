<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusinessAudience extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusinessAudience";
    }

    public static function fieldList() {
        $fields = [
            "yearsInOperation" => "yearsInOperation",
            "yearlyRevenue" => "yearlyRevenue",
            "numberOfEmployees" => "numberOfEmployees",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The age of the business.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $yearsInOperation;

    /**
     * The size of the business in annual revenue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $yearlyRevenue;

    /**
     * The number of employees in an organization e.g. business.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $numberOfEmployees;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $yearsInOperation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYearsInOperation($yearsInOperation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $yearsInOperation = self::checkTypes($yearsInOperation, $types);

        $this->yearsInOperation = $yearsInOperation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $yearlyRevenue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYearlyRevenue($yearlyRevenue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $yearlyRevenue = self::checkTypes($yearlyRevenue, $types);

        $this->yearlyRevenue = $yearlyRevenue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $numberOfEmployees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $numberOfEmployees = self::checkTypes($numberOfEmployees, $types);

        $this->numberOfEmployees = $numberOfEmployees;
    }

}
