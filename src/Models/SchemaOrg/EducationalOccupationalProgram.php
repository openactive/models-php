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
            "numberOfCredits" => "numberOfCredits",
            "programPrerequisites" => "programPrerequisites",
            "termsPerYear" => "termsPerYear",
            "timeOfDay" => "timeOfDay",
            "termDuration" => "termDuration",
            "educationalProgramMode" => "educationalProgramMode",
            "timeToComplete" => "timeToComplete",
            "typicalCreditsPerTerm" => "typicalCreditsPerTerm",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "maximumEnrollment" => "maximumEnrollment",
            "applicationDeadline" => "applicationDeadline",
            "financialAidEligible" => "financialAidEligible",
            "salaryUponCompletion" => "salaryUponCompletion",
            "applicationStartDate" => "applicationStartDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $numberOfCredits;

    /**
     * Prerequisites for enrolling in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Course|string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $programPrerequisites;

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     *
     *
     * @var null|float
     */
    protected $termsPerYear;

    /**
     * The time of day the program normally runs. For example, "evenings".
     *
     *
     * @var string
     */
    protected $timeOfDay;

    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
     *
     *
     * @var null|DateInterval
     */
    protected $termDuration;

    /**
     * Similar to courseMode, The medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     *
     * @var string
     */
    protected $educationalProgramMode;

    /**
     * The expected length of time to complete the program if attending full-time.
     *
     *
     * @var null|DateInterval
     */
    protected $timeToComplete;

    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $typicalCreditsPerTerm;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $occupationalCredentialAwarded;

    /**
     * The maximum number of students who may be enrolled in the program.
     *
     *
     * @var null|int
     */
    protected $maximumEnrollment;

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     *
     *
     * @var null|Date
     */
    protected $applicationDeadline;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $financialAidEligible;

    /**
     * The expected salary upon completing the training.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $salaryUponCompletion;

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     *
     *
     * @var null|Date
     */
    protected $applicationStartDate;

    /**
     * @return int|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getNumberOfCredits()
    {
        return $this->numberOfCredits;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\StructuredValue|null $numberOfCredits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfCredits($numberOfCredits)
    {
        $types = array(
            "int",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        );

        $numberOfCredits = self::checkTypes($numberOfCredits, $types);

        $this->numberOfCredits = $numberOfCredits;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Course|string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getProgramPrerequisites()
    {
        return $this->programPrerequisites;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Course|string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $programPrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramPrerequisites($programPrerequisites)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Course",
            "string",
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        );

        $programPrerequisites = self::checkTypes($programPrerequisites, $types);

        $this->programPrerequisites = $programPrerequisites;
    }

    /**
     * @return null|float
     */
    public function getTermsPerYear()
    {
        return $this->termsPerYear;
    }

    /**
     * @param null|float $termsPerYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsPerYear($termsPerYear)
    {
        $types = array(
            "null",
            "float",
        );

        $termsPerYear = self::checkTypes($termsPerYear, $types);

        $this->termsPerYear = $termsPerYear;
    }

    /**
     * @return string
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * @param string $timeOfDay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeOfDay($timeOfDay)
    {
        $types = array(
            "string",
        );

        $timeOfDay = self::checkTypes($timeOfDay, $types);

        $this->timeOfDay = $timeOfDay;
    }

    /**
     * @return null|DateInterval
     */
    public function getTermDuration()
    {
        return $this->termDuration;
    }

    /**
     * @param null|DateInterval $termDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermDuration($termDuration)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $termDuration = self::checkTypes($termDuration, $types);

        $this->termDuration = $termDuration;
    }

    /**
     * @return string
     */
    public function getEducationalProgramMode()
    {
        return $this->educationalProgramMode;
    }

    /**
     * @param string $educationalProgramMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalProgramMode($educationalProgramMode)
    {
        $types = array(
            "string",
        );

        $educationalProgramMode = self::checkTypes($educationalProgramMode, $types);

        $this->educationalProgramMode = $educationalProgramMode;
    }

    /**
     * @return null|DateInterval
     */
    public function getTimeToComplete()
    {
        return $this->timeToComplete;
    }

    /**
     * @param null|DateInterval $timeToComplete
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeToComplete($timeToComplete)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $timeToComplete = self::checkTypes($timeToComplete, $types);

        $this->timeToComplete = $timeToComplete;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getTypicalCreditsPerTerm()
    {
        return $this->typicalCreditsPerTerm;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\StructuredValue|null $typicalCreditsPerTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypicalCreditsPerTerm($typicalCreditsPerTerm)
    {
        $types = array(
            "int",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        );

        $typicalCreditsPerTerm = self::checkTypes($typicalCreditsPerTerm, $types);

        $this->typicalCreditsPerTerm = $typicalCreditsPerTerm;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getOccupationalCredentialAwarded()
    {
        return $this->occupationalCredentialAwarded;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $occupationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        );

        $occupationalCredentialAwarded = self::checkTypes($occupationalCredentialAwarded, $types);

        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
    }

    /**
     * @return null|int
     */
    public function getMaximumEnrollment()
    {
        return $this->maximumEnrollment;
    }

    /**
     * @param null|int $maximumEnrollment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumEnrollment($maximumEnrollment)
    {
        $types = array(
            "null",
            "int",
        );

        $maximumEnrollment = self::checkTypes($maximumEnrollment, $types);

        $this->maximumEnrollment = $maximumEnrollment;
    }

    /**
     * @return null|Date
     */
    public function getApplicationDeadline()
    {
        return $this->applicationDeadline;
    }

    /**
     * @param null|Date $applicationDeadline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationDeadline($applicationDeadline)
    {
        $types = array(
            "null",
            "Date",
        );

        $applicationDeadline = self::checkTypes($applicationDeadline, $types);

        $this->applicationDeadline = $applicationDeadline;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getFinancialAidEligible()
    {
        return $this->financialAidEligible;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $financialAidEligible
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFinancialAidEligible($financialAidEligible)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $financialAidEligible = self::checkTypes($financialAidEligible, $types);

        $this->financialAidEligible = $financialAidEligible;
    }

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
     * @return null|Date
     */
    public function getApplicationStartDate()
    {
        return $this->applicationStartDate;
    }

    /**
     * @param null|Date $applicationStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationStartDate($applicationStartDate)
    {
        $types = array(
            "null",
            "Date",
        );

        $applicationStartDate = self::checkTypes($applicationStartDate, $types);

        $this->applicationStartDate = $applicationStartDate;
    }

}
