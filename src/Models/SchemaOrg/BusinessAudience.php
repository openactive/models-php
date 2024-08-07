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
            "numberOfEmployees" => "numberOfEmployees",
            "yearlyRevenue" => "yearlyRevenue",
            "yearsInOperation" => "yearsInOperation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of employees in an organization, e.g. business.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfEmployees;

    /**
     * The size of the business in annual revenue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $yearlyRevenue;

    /**
     * The age of the business.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $yearsInOperation;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numberOfEmployees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numberOfEmployees = self::checkTypes($numberOfEmployees, $types);

        $this->numberOfEmployees = $numberOfEmployees;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $yearlyRevenue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYearlyRevenue($yearlyRevenue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $yearlyRevenue = self::checkTypes($yearlyRevenue, $types);

        $this->yearlyRevenue = $yearlyRevenue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $yearsInOperation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYearsInOperation($yearsInOperation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $yearsInOperation = self::checkTypes($yearsInOperation, $types);

        $this->yearsInOperation = $yearsInOperation;
    }

}
