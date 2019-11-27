<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WorkBasedProgram extends \OpenActive\Models\SchemaOrg\EducationalOccupationalProgram
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WorkBasedProgram";
    }

    public static function fieldList() {
        $fields = [
            "trainingSalary" => "trainingSalary",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The estimated salary earned while in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $trainingSalary;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    public function getTrainingSalary()
    {
        return $this->trainingSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution $trainingSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrainingSalary($trainingSalary)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
        );

        $trainingSalary = self::checkTypes($trainingSalary, $types);

        $this->trainingSalary = $trainingSalary;
    }

}
