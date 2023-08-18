<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EmployeeRole extends \OpenActive\Models\SchemaOrg\OrganizationRole
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EmployeeRole";
    }

    public static function fieldList() {
        $fields = [
            "baseSalary" => "baseSalary",
            "salaryCurrency" => "salaryCurrency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null
     */
    protected $baseSalary;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null $baseSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBaseSalary($baseSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
            "Number",
            "null",
        ];

        $baseSalary = self::checkTypes($baseSalary, $types);

        $this->baseSalary = $baseSalary;
    }

    /**
     * @return string
     */
    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    /**
     * @param string $salaryCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSalaryCurrency($salaryCurrency)
    {
        $types = [
            "string",
        ];

        $salaryCurrency = self::checkTypes($salaryCurrency, $types);

        $this->salaryCurrency = $salaryCurrency;
    }

}
