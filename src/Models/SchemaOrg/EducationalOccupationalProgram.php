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
            "typicalCreditsPerTerm" => "typicalCreditsPerTerm",
            "applicationStartDate" => "applicationStartDate",
            "educationalCredentialAwarded" => "educationalCredentialAwarded",
            "hasCourse" => "hasCourse",
            "programPrerequisites" => "programPrerequisites",
            "offers" => "offers",
            "salaryUponCompletion" => "salaryUponCompletion",
            "timeOfDay" => "timeOfDay",
            "maximumEnrollment" => "maximumEnrollment",
            "provider" => "provider",
            "numberOfCredits" => "numberOfCredits",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "trainingSalary" => "trainingSalary",
            "dayOfWeek" => "dayOfWeek",
            "applicationDeadline" => "applicationDeadline",
            "occupationalCategory" => "occupationalCategory",
            "educationalProgramMode" => "educationalProgramMode",
            "startDate" => "startDate",
            "financialAidEligible" => "financialAidEligible",
            "termDuration" => "termDuration",
            "programType" => "programType",
            "endDate" => "endDate",
            "termsPerYear" => "termsPerYear",
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
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $typicalCreditsPerTerm;

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     *
     *
     * @var Date|null
     */
    protected $applicationStartDate;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationalCredentialAwarded;

    /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to everyone on the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Course
     */
    protected $hasCourse;

    /**
     * Prerequisites for enrolling in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject|string|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $programPrerequisites;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The expected salary upon completing the training.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $salaryUponCompletion;

    /**
     * The time of day the program normally runs. For example, "evenings".
     *
     *
     * @var string
     */
    protected $timeOfDay;

    /**
     * The maximum number of students who may be enrolled in the program.
     *
     *
     * @var int|null
     */
    protected $maximumEnrollment;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $provider;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|int|null
     */
    protected $numberOfCredits;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $occupationalCredentialAwarded;

    /**
     * The estimated salary earned while in the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution
     */
    protected $trainingSalary;

    /**
     * The day of the week for which these opening hours are valid.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    protected $dayOfWeek;

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     *
     *
     * @var Date|null
     */
    protected $applicationDeadline;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CategoryCode
     */
    protected $occupationalCategory;

    /**
     * Similar to courseMode, The medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     *
     * @var string
     */
    protected $educationalProgramMode;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $startDate;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $financialAidEligible;

    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
     *
     *
     * @var DateInterval|null
     */
    protected $termDuration;

    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc..
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $programType;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     *
     *
     * @var Number|null
     */
    protected $termsPerYear;

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
        $types = [
            "DateInterval",
            "null",
        ];

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
        $types = [
            "int",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        ];

        $typicalCreditsPerTerm = self::checkTypes($typicalCreditsPerTerm, $types);

        $this->typicalCreditsPerTerm = $typicalCreditsPerTerm;
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
        $types = [
            "Date",
            "null",
        ];

        $applicationStartDate = self::checkTypes($applicationStartDate, $types);

        $this->applicationStartDate = $applicationStartDate;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getEducationalCredentialAwarded()
    {
        return $this->educationalCredentialAwarded;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $educationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalCredentialAwarded($educationalCredentialAwarded)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $educationalCredentialAwarded = self::checkTypes($educationalCredentialAwarded, $types);

        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Course
     */
    public function getHasCourse()
    {
        return $this->hasCourse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Course $hasCourse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCourse($hasCourse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Course",
        ];

        $hasCourse = self::checkTypes($hasCourse, $types);

        $this->hasCourse = $hasCourse;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject|string|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getProgramPrerequisites()
    {
        return $this->programPrerequisites;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject|string|\OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $programPrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramPrerequisites($programPrerequisites)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "string",
            "\OpenActive\Models\SchemaOrg\Course",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $programPrerequisites = self::checkTypes($programPrerequisites, $types);

        $this->programPrerequisites = $programPrerequisites;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
        ];

        $salaryUponCompletion = self::checkTypes($salaryUponCompletion, $types);

        $this->salaryUponCompletion = $salaryUponCompletion;
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
        $types = [
            "string",
        ];

        $timeOfDay = self::checkTypes($timeOfDay, $types);

        $this->timeOfDay = $timeOfDay;
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
        $types = [
            "int",
            "null",
        ];

        $maximumEnrollment = self::checkTypes($maximumEnrollment, $types);

        $this->maximumEnrollment = $maximumEnrollment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "int",
            "null",
        ];

        $numberOfCredits = self::checkTypes($numberOfCredits, $types);

        $this->numberOfCredits = $numberOfCredits;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $occupationalCredentialAwarded = self::checkTypes($occupationalCredentialAwarded, $types);

        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
        ];

        $trainingSalary = self::checkTypes($trainingSalary, $types);

        $this->trainingSalary = $trainingSalary;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|null $dayOfWeek
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "null",
        ];

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
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
        $types = [
            "Date",
            "null",
        ];

        $applicationDeadline = self::checkTypes($applicationDeadline, $types);

        $this->applicationDeadline = $applicationDeadline;
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
        $types = [
            "string",
        ];

        $educationalProgramMode = self::checkTypes($educationalProgramMode, $types);

        $this->educationalProgramMode = $educationalProgramMode;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $financialAidEligible = self::checkTypes($financialAidEligible, $types);

        $this->financialAidEligible = $financialAidEligible;
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
        $types = [
            "DateInterval",
            "null",
        ];

        $termDuration = self::checkTypes($termDuration, $types);

        $this->termDuration = $termDuration;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $programType = self::checkTypes($programType, $types);

        $this->programType = $programType;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return Number|null
     */
    public function getTermsPerYear()
    {
        return $this->termsPerYear;
    }

    /**
     * @param Number|null $termsPerYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsPerYear($termsPerYear)
    {
        $types = [
            "Number",
            "null",
        ];

        $termsPerYear = self::checkTypes($termsPerYear, $types);

        $this->termsPerYear = $termsPerYear;
    }

}
