<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class EmployeeRole extends \OpenActive\Models\SchemaOrg\OrganizationRole
{
    /**
     * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var PriceSpecification|decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $baseSalary;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSalaryCurrency($salaryCurrency)
    {
        $types = array(
            "string",
        );

        $salaryCurrency = self::checkTypes($salaryCurrency, $types);

        $this->salaryCurrency = $salaryCurrency;
    }

    /**
     * @return PriceSpecification|decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param PriceSpecification|decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $baseSalary
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBaseSalary($baseSalary)
    {
        $types = array(
            "PriceSpecification",
            "decimal",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $baseSalary = self::checkTypes($baseSalary, $types);

        $this->baseSalary = $baseSalary;
    }

}
