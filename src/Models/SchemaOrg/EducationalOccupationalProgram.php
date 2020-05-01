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
            "timeToComplete" => "timeToComplete",
            "maximumEnrollment" => "maximumEnrollment",
            "financialAidEligible" => "financialAidEligible",
            "numberOfCredits" => "numberOfCredits",
            "salaryUponCompletion" => "salaryUponCompletion",
            "trainingSalary" => "trainingSalary",
            "educationalProgramMode" => "educationalProgramMode",
            "occupationalCategory" => "occupationalCategory",
            "programType" => "programType",
            "programPrerequisites" => "programPrerequisites",
            "termsPerYear" => "termsPerYear",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "typicalCreditsPerTerm" => "typicalCreditsPerTerm",
            "applicationDeadline" => "applicationDeadline",
            "timeOfDay" => "timeOfDay",
            "termDuration" => "termDuration",
            "applicationStartDate" => "applicationStartDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The expected length of time to complete the program if attending full-time.
     *
     *
     * @var DateInterval|null
     */
    protected $timeToComplete;

    /**
     * The maximum number of students who may be enrolled in the program.
     *
     *
     * @var int|null
     */
    protected $maximumEnrollment;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $financialAidEligible;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|int|null
     */
    protected $numberOfCredits;

    /**
     * The expected salary upon completing the training.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $salaryUponCompletion;

    /**
     * The estimated salary earned while in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $trainingSalary;

    /**
     * Similar to courseMode, The medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     *
     * @var string
     */
    protected $educationalProgramMode;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br/><br/>
     * 
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CategoryCode
     */
    protected $occupationalCategory;

    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc..
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $programType;

    /**
     * Prerequisites for enrolling in the program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $programPrerequisites;

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     *
     *
     * @var float|null
     */
    protected $termsPerYear;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $occupationalCredentialAwarded;

    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|int|null
     */
    protected $typicalCreditsPerTerm;

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     *
     *
     * @var Date|null
     */
    protected $applicationDeadline;

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
     * @var DateInterval|null
     */
    protected $termDuration;

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     *
     *
     * @var Date|null
     */
    protected $applicationStartDate;

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

    /**
     * @return int|null
     */
    public function getMaximumEnrollment()
    {
        return $this->maximumEnrollment;
    }

    /**
     * @param int|null $maximumEnrollment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumEnrollment($maximumEnrollment)
    {
        $types = array(
            "int",
            "null",
        );

        $maximumEnrollment = self::checkTypes($maximumEnrollment, $types);

        $this->maximumEnrollment = $maximumEnrollment;
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
     * @return \OpenActive\Models\SchemaOrg\StructuredValue|int|null
     */
    public function getNumberOfCredits()
    {
        return $this->numberOfCredits;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StructuredValue|int|null $numberOfCredits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfCredits($numberOfCredits)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "int",
            "null",
        );

        $numberOfCredits = self::checkTypes($numberOfCredits, $types);

        $this->numberOfCredits = $numberOfCredits;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
        );

        $occupationalCategory = self::checkTypes($occupationalCategory, $types);

        $this->occupationalCategory = $occupationalCategory;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getProgramType()
    {
        return $this->programType;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $programType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramType($programType)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        );

        $programType = self::checkTypes($programType, $types);

        $this->programType = $programType;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getProgramPrerequisites()
    {
        return $this->programPrerequisites;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $programPrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramPrerequisites($programPrerequisites)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "\OpenActive\Models\SchemaOrg\Course",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        );

        $programPrerequisites = self::checkTypes($programPrerequisites, $types);

        $this->programPrerequisites = $programPrerequisites;
    }

    /**
     * @return float|null
     */
    public function getTermsPerYear()
    {
        return $this->termsPerYear;
    }

    /**
     * @param float|null $termsPerYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsPerYear($termsPerYear)
    {
        $types = array(
            "float",
            "null",
        );

        $termsPerYear = self::checkTypes($termsPerYear, $types);

        $this->termsPerYear = $termsPerYear;
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
     * @return \OpenActive\Models\SchemaOrg\StructuredValue|int|null
     */
    public function getTypicalCreditsPerTerm()
    {
        return $this->typicalCreditsPerTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StructuredValue|int|null $typicalCreditsPerTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypicalCreditsPerTerm($typicalCreditsPerTerm)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "int",
            "null",
        );

        $typicalCreditsPerTerm = self::checkTypes($typicalCreditsPerTerm, $types);

        $this->typicalCreditsPerTerm = $typicalCreditsPerTerm;
    }

    /**
     * @return Date|null
     */
    public function getApplicationDeadline()
    {
        return $this->applicationDeadline;
    }

    /**
     * @param Date|null $applicationDeadline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationDeadline($applicationDeadline)
    {
        $types = array(
            "Date",
            "null",
        );

        $applicationDeadline = self::checkTypes($applicationDeadline, $types);

        $this->applicationDeadline = $applicationDeadline;
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
     * @return DateInterval|null
     */
    public function getTermDuration()
    {
        return $this->termDuration;
    }

    /**
     * @param DateInterval|null $termDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermDuration($termDuration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $termDuration = self::checkTypes($termDuration, $types);

        $this->termDuration = $termDuration;
    }

    /**
     * @return Date|null
     */
    public function getApplicationStartDate()
    {
        return $this->applicationStartDate;
    }

    /**
     * @param Date|null $applicationStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationStartDate($applicationStartDate)
    {
        $types = array(
            "Date",
            "null",
        );

        $applicationStartDate = self::checkTypes($applicationStartDate, $types);

        $this->applicationStartDate = $applicationStartDate;
    }

}
