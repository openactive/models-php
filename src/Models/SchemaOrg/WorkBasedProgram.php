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
            "occupationalCategory" => "occupationalCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The estimated salary earned while in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string
     */
    protected $trainingSalary;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CategoryCode
     */
    protected $occupationalCategory;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string
     */
    public function getTrainingSalary()
    {
        return $this->trainingSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string $trainingSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrainingSalary($trainingSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "string",
        ];

        $trainingSalary = self::checkTypes($trainingSalary, $types);

        $this->trainingSalary = $trainingSalary;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CategoryCode
     */
    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CategoryCode $occupationalCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCategory($occupationalCategory)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
        ];

        $occupationalCategory = self::checkTypes($occupationalCategory, $types);

        $this->occupationalCategory = $occupationalCategory;
    }

}
