<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class JobPosting extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:JobPosting";
    }

    public static function fieldList() {
        $fields = [
            "title" => "title",
            "applicantLocationRequirements" => "applicantLocationRequirements",
            "applicationContact" => "applicationContact",
            "baseSalary" => "baseSalary",
            "benefits" => "benefits",
            "datePosted" => "datePosted",
            "directApply" => "directApply",
            "educationRequirements" => "educationRequirements",
            "eligibilityToWorkRequirement" => "eligibilityToWorkRequirement",
            "employerOverview" => "employerOverview",
            "employmentType" => "employmentType",
            "employmentUnit" => "employmentUnit",
            "estimatedSalary" => "estimatedSalary",
            "experienceInPlaceOfEducation" => "experienceInPlaceOfEducation",
            "experienceRequirements" => "experienceRequirements",
            "hiringOrganization" => "hiringOrganization",
            "incentiveCompensation" => "incentiveCompensation",
            "incentives" => "incentives",
            "industry" => "industry",
            "jobBenefits" => "jobBenefits",
            "jobDuration" => "jobDuration",
            "jobImmediateStart" => "jobImmediateStart",
            "jobLocation" => "jobLocation",
            "jobLocationType" => "jobLocationType",
            "jobStartDate" => "jobStartDate",
            "occupationalCategory" => "occupationalCategory",
            "physicalRequirement" => "physicalRequirement",
            "qualifications" => "qualifications",
            "relevantOccupation" => "relevantOccupation",
            "responsibilities" => "responsibilities",
            "salaryCurrency" => "salaryCurrency",
            "securityClearanceRequirement" => "securityClearanceRequirement",
            "sensoryRequirement" => "sensoryRequirement",
            "skills" => "skills",
            "specialCommitments" => "specialCommitments",
            "totalJobOpenings" => "totalJobOpenings",
            "validThrough" => "validThrough",
            "workHours" => "workHours",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The title of the job.
     *
     *
     * @var string
     */
    protected $title;

    /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $applicantLocationRequirements;

    /**
     * Contact details for further information relevant to this job posting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $applicationContact;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\PriceSpecification|string|null
     */
    protected $baseSalary;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $benefits;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
     *
     *
     * @var bool|null
     */
    protected $directApply;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $educationRequirements;

    /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
     *
     *
     * @var string
     */
    protected $eligibilityToWorkRequirement;

    /**
     * A description of the employer, career opportunities and work environment for this position.
     *
     *
     * @var string
     */
    protected $employerOverview;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     *
     * @var string
     */
    protected $employmentType;

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $employmentUnit;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|Number|null
     */
    protected $estimatedSalary;

    /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
     *
     *
     * @var bool|null
     */
    protected $experienceInPlaceOfEducation;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    protected $experienceRequirements;

    /**
     * Organization or Person offering the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentiveCompensation;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentives;

    /**
     * The industry associated with the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $industry;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $jobBenefits;

    /**
     * The expected duration of an employment offer as advertised by the employer. Relevant for job postings that have a clearly defined period in mind such as seasonal work, substitutes for maternal leave or any other temporary employment.
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $jobDuration;

    /**
     * An indicator as to whether a position is available for an immediate start.
     *
     *
     * @var bool|null
     */
    protected $jobImmediateStart;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $jobLocation;

    /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
     *
     *
     * @var string
     */
    protected $jobLocationType;

    /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     *
     *
     * @var Date|string|null
     */
    protected $jobStartDate;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $physicalRequirement;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Credential|string
     */
    protected $qualifications;

    /**
     * The Occupation for the JobPosting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation|string
     */
    protected $relevantOccupation;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * A description of any security clearance requirements of the job.
     *
     *
     * @var string
     */
    protected $securityClearanceRequirement;

    /**
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $sensoryRequirement;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $skills;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     *
     * @var string
     */
    protected $specialCommitments;

    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     *
     *
     * @var int|null
     */
    protected $totalJobOpenings;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     *
     * @var string
     */
    protected $workHours;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTitle($title)
    {
        $types = [
            "string",
        ];

        $title = self::checkTypes($title, $types);

        $this->title = $title;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getApplicantLocationRequirements()
    {
        return $this->applicantLocationRequirements;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $applicantLocationRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicantLocationRequirements($applicantLocationRequirements)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $applicantLocationRequirements = self::checkTypes($applicantLocationRequirements, $types);

        $this->applicantLocationRequirements = $applicantLocationRequirements;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getApplicationContact()
    {
        return $this->applicationContact;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $applicationContact
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationContact($applicationContact)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $applicationContact = self::checkTypes($applicationContact, $types);

        $this->applicationContact = $applicationContact;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\PriceSpecification|string|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\PriceSpecification|string|null $baseSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBaseSalary($baseSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "Number",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
            "null",
        ];

        $baseSalary = self::checkTypes($baseSalary, $types);

        $this->baseSalary = $baseSalary;
    }

    /**
     * @return string
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * @param string $benefits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBenefits($benefits)
    {
        $types = [
            "string",
        ];

        $benefits = self::checkTypes($benefits, $types);

        $this->benefits = $benefits;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param Date|DateTime|null $datePosted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePosted($datePosted)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePosted = self::checkTypes($datePosted, $types);

        $this->datePosted = $datePosted;
    }

    /**
     * @return bool|null
     */
    public function getDirectApply()
    {
        return $this->directApply;
    }

    /**
     * @param bool|null $directApply
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectApply($directApply)
    {
        $types = [
            "bool",
            "null",
        ];

        $directApply = self::checkTypes($directApply, $types);

        $this->directApply = $directApply;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $educationRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationRequirements($educationRequirements)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        ];

        $educationRequirements = self::checkTypes($educationRequirements, $types);

        $this->educationRequirements = $educationRequirements;
    }

    /**
     * @return string
     */
    public function getEligibilityToWorkRequirement()
    {
        return $this->eligibilityToWorkRequirement;
    }

    /**
     * @param string $eligibilityToWorkRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibilityToWorkRequirement($eligibilityToWorkRequirement)
    {
        $types = [
            "string",
        ];

        $eligibilityToWorkRequirement = self::checkTypes($eligibilityToWorkRequirement, $types);

        $this->eligibilityToWorkRequirement = $eligibilityToWorkRequirement;
    }

    /**
     * @return string
     */
    public function getEmployerOverview()
    {
        return $this->employerOverview;
    }

    /**
     * @param string $employerOverview
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmployerOverview($employerOverview)
    {
        $types = [
            "string",
        ];

        $employerOverview = self::checkTypes($employerOverview, $types);

        $this->employerOverview = $employerOverview;
    }

    /**
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * @param string $employmentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmploymentType($employmentType)
    {
        $types = [
            "string",
        ];

        $employmentType = self::checkTypes($employmentType, $types);

        $this->employmentType = $employmentType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getEmploymentUnit()
    {
        return $this->employmentUnit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $employmentUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmploymentUnit($employmentUnit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $employmentUnit = self::checkTypes($employmentUnit, $types);

        $this->employmentUnit = $employmentUnit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|Number|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|Number|null $estimatedSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "string",
            "Number",
            "null",
        ];

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
    }

    /**
     * @return bool|null
     */
    public function getExperienceInPlaceOfEducation()
    {
        return $this->experienceInPlaceOfEducation;
    }

    /**
     * @param bool|null $experienceInPlaceOfEducation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExperienceInPlaceOfEducation($experienceInPlaceOfEducation)
    {
        $types = [
            "bool",
            "null",
        ];

        $experienceInPlaceOfEducation = self::checkTypes($experienceInPlaceOfEducation, $types);

        $this->experienceInPlaceOfEducation = $experienceInPlaceOfEducation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string $experienceRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExperienceRequirements($experienceRequirements)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements",
            "string",
        ];

        $experienceRequirements = self::checkTypes($experienceRequirements, $types);

        $this->experienceRequirements = $experienceRequirements;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $hiringOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHiringOrganization($hiringOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $hiringOrganization = self::checkTypes($hiringOrganization, $types);

        $this->hiringOrganization = $hiringOrganization;
    }

    /**
     * @return string
     */
    public function getIncentiveCompensation()
    {
        return $this->incentiveCompensation;
    }

    /**
     * @param string $incentiveCompensation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentiveCompensation($incentiveCompensation)
    {
        $types = [
            "string",
        ];

        $incentiveCompensation = self::checkTypes($incentiveCompensation, $types);

        $this->incentiveCompensation = $incentiveCompensation;
    }

    /**
     * @return string
     */
    public function getIncentives()
    {
        return $this->incentives;
    }

    /**
     * @param string $incentives
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentives($incentives)
    {
        $types = [
            "string",
        ];

        $incentives = self::checkTypes($incentives, $types);

        $this->incentives = $incentives;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $industry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIndustry($industry)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $industry = self::checkTypes($industry, $types);

        $this->industry = $industry;
    }

    /**
     * @return string
     */
    public function getJobBenefits()
    {
        return $this->jobBenefits;
    }

    /**
     * @param string $jobBenefits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobBenefits($jobBenefits)
    {
        $types = [
            "string",
        ];

        $jobBenefits = self::checkTypes($jobBenefits, $types);

        $this->jobBenefits = $jobBenefits;
    }

    /**
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getJobDuration()
    {
        return $this->jobDuration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $jobDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobDuration($jobDuration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $jobDuration = self::checkTypes($jobDuration, $types);

        $this->jobDuration = $jobDuration;
    }

    /**
     * @return bool|null
     */
    public function getJobImmediateStart()
    {
        return $this->jobImmediateStart;
    }

    /**
     * @param bool|null $jobImmediateStart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobImmediateStart($jobImmediateStart)
    {
        $types = [
            "bool",
            "null",
        ];

        $jobImmediateStart = self::checkTypes($jobImmediateStart, $types);

        $this->jobImmediateStart = $jobImmediateStart;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $jobLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobLocation($jobLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $jobLocation = self::checkTypes($jobLocation, $types);

        $this->jobLocation = $jobLocation;
    }

    /**
     * @return string
     */
    public function getJobLocationType()
    {
        return $this->jobLocationType;
    }

    /**
     * @param string $jobLocationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobLocationType($jobLocationType)
    {
        $types = [
            "string",
        ];

        $jobLocationType = self::checkTypes($jobLocationType, $types);

        $this->jobLocationType = $jobLocationType;
    }

    /**
     * @return Date|string|null
     */
    public function getJobStartDate()
    {
        return $this->jobStartDate;
    }

    /**
     * @param Date|string|null $jobStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobStartDate($jobStartDate)
    {
        $types = [
            "Date",
            "string",
            "null",
        ];

        $jobStartDate = self::checkTypes($jobStartDate, $types);

        $this->jobStartDate = $jobStartDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|string $occupationalCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCategory($occupationalCategory)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
        ];

        $occupationalCategory = self::checkTypes($occupationalCategory, $types);

        $this->occupationalCategory = $occupationalCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getPhysicalRequirement()
    {
        return $this->physicalRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $physicalRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhysicalRequirement($physicalRequirement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $physicalRequirement = self::checkTypes($physicalRequirement, $types);

        $this->physicalRequirement = $physicalRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Credential|string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Credential|string $qualifications
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQualifications($qualifications)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Credential",
            "string",
        ];

        $qualifications = self::checkTypes($qualifications, $types);

        $this->qualifications = $qualifications;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Occupation|string
     */
    public function getRelevantOccupation()
    {
        return $this->relevantOccupation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Occupation|string $relevantOccupation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelevantOccupation($relevantOccupation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Occupation",
            "string",
        ];

        $relevantOccupation = self::checkTypes($relevantOccupation, $types);

        $this->relevantOccupation = $relevantOccupation;
    }

    /**
     * @return string
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * @param string $responsibilities
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResponsibilities($responsibilities)
    {
        $types = [
            "string",
        ];

        $responsibilities = self::checkTypes($responsibilities, $types);

        $this->responsibilities = $responsibilities;
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

    /**
     * @return string
     */
    public function getSecurityClearanceRequirement()
    {
        return $this->securityClearanceRequirement;
    }

    /**
     * @param string $securityClearanceRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSecurityClearanceRequirement($securityClearanceRequirement)
    {
        $types = [
            "string",
        ];

        $securityClearanceRequirement = self::checkTypes($securityClearanceRequirement, $types);

        $this->securityClearanceRequirement = $securityClearanceRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getSensoryRequirement()
    {
        return $this->sensoryRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $sensoryRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSensoryRequirement($sensoryRequirement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $sensoryRequirement = self::checkTypes($sensoryRequirement, $types);

        $this->sensoryRequirement = $sensoryRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $skills
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSkills($skills)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $skills = self::checkTypes($skills, $types);

        $this->skills = $skills;
    }

    /**
     * @return string
     */
    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    /**
     * @param string $specialCommitments
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialCommitments($specialCommitments)
    {
        $types = [
            "string",
        ];

        $specialCommitments = self::checkTypes($specialCommitments, $types);

        $this->specialCommitments = $specialCommitments;
    }

    /**
     * @return int|null
     */
    public function getTotalJobOpenings()
    {
        return $this->totalJobOpenings;
    }

    /**
     * @param int|null $totalJobOpenings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalJobOpenings($totalJobOpenings)
    {
        $types = [
            "int",
            "null",
        ];

        $totalJobOpenings = self::checkTypes($totalJobOpenings, $types);

        $this->totalJobOpenings = $totalJobOpenings;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param Date|DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return string
     */
    public function getWorkHours()
    {
        return $this->workHours;
    }

    /**
     * @param string $workHours
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkHours($workHours)
    {
        $types = [
            "string",
        ];

        $workHours = self::checkTypes($workHours, $types);

        $this->workHours = $workHours;
    }

}
