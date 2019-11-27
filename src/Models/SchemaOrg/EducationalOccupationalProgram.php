<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationalOccupationalProgram extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EducationalOccupationalProgram";
    }

    public static function fieldList() {
        $fields = [
            "salaryUponCompletion" => "salaryUponCompletion",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "programPrerequisites" => "programPrerequisites",
            "timeToComplete" => "timeToComplete",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The expected salary upon completing the training.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $salaryUponCompletion;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $occupationalCredentialAwarded;

    /**
     * Prerequisites for enrolling in the program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|\OpenActive\Models\SchemaOrg\Course
     */
    protected $programPrerequisites;

    /**
     * The expected length of time to complete the program if attending full-time.
     *
     *
     * @var DateInterval|null
     */
    protected $timeToComplete;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    public function getSalaryUponCompletion()
    {
        return $this->salaryUponCompletion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution $salaryUponCompletion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSalaryUponCompletion($salaryUponCompletion)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
        );

        $salaryUponCompletion = self::checkTypes($salaryUponCompletion, $types);

        $this->salaryUponCompletion = $salaryUponCompletion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getOccupationalCredentialAwarded()
    {
        return $this->occupationalCredentialAwarded;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $occupationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        );

        $occupationalCredentialAwarded = self::checkTypes($occupationalCredentialAwarded, $types);

        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|\OpenActive\Models\SchemaOrg\Course
     */
    public function getProgramPrerequisites()
    {
        return $this->programPrerequisites;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|\OpenActive\Models\SchemaOrg\Course $programPrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramPrerequisites($programPrerequisites)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "\OpenActive\Models\SchemaOrg\Course",
        );

        $programPrerequisites = self::checkTypes($programPrerequisites, $types);

        $this->programPrerequisites = $programPrerequisites;
    }

    /**
     * @return DateInterval|null
     */
    public function getTimeToComplete()
    {
        return $this->timeToComplete;
    }

    /**
     * @param DateInterval|null $timeToComplete
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeToComplete($timeToComplete)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $timeToComplete = self::checkTypes($timeToComplete, $types);

        $this->timeToComplete = $timeToComplete;
    }

}
