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
            "experienceRequirements" => "experienceRequirements",
            "hiringOrganization" => "hiringOrganization",
            "directApply" => "directApply",
            "skills" => "skills",
            "estimatedSalary" => "estimatedSalary",
            "benefits" => "benefits",
            "sensoryRequirement" => "sensoryRequirement",
            "jobImmediateStart" => "jobImmediateStart",
            "physicalRequirement" => "physicalRequirement",
            "jobLocation" => "jobLocation",
            "incentives" => "incentives",
            "employerOverview" => "employerOverview",
            "specialCommitments" => "specialCommitments",
            "jobLocationType" => "jobLocationType",
            "totalJobOpenings" => "totalJobOpenings",
            "salaryCurrency" => "salaryCurrency",
            "responsibilities" => "responsibilities",
            "securityClearanceRequirement" => "securityClearanceRequirement",
            "datePosted" => "datePosted",
            "qualifications" => "qualifications",
            "jobStartDate" => "jobStartDate",
            "incentiveCompensation" => "incentiveCompensation",
            "industry" => "industry",
            "employmentUnit" => "employmentUnit",
            "baseSalary" => "baseSalary",
            "validThrough" => "validThrough",
            "workHours" => "workHours",
            "experienceInPlaceOfEducation" => "experienceInPlaceOfEducation",
            "jobBenefits" => "jobBenefits",
            "applicantLocationRequirements" => "applicantLocationRequirements",
            "occupationalCategory" => "occupationalCategory",
            "employmentType" => "employmentType",
            "educationRequirements" => "educationRequirements",
            "applicationContact" => "applicationContact",
            "relevantOccupation" => "relevantOccupation",
            "eligibilityToWorkRequirement" => "eligibilityToWorkRequirement",
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
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    protected $experienceRequirements;

    /**
     * Organization offering the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $hiringOrganization;

    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
     *
     *
     * @var bool|null
     */
    protected $directApply;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $skills;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null
     */
    protected $estimatedSalary;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $benefits;

    /**
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $sensoryRequirement;

    /**
     * An indicator as to whether a position is available for an immediate start.
     *
     *
     * @var bool|null
     */
    protected $jobImmediateStart;

    /**
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $physicalRequirement;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $jobLocation;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentives;

    /**
     * A description of the employer, career opportunities and work environment for this position.
     *
     *
     * @var string
     */
    protected $employerOverview;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     *
     * @var string
     */
    protected $specialCommitments;

    /**
     * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
     *
     *
     * @var string
     */
    protected $jobLocationType;

    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     *
     *
     * @var int|null
     */
    protected $totalJobOpenings;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) ) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * A description of any security clearance requirements of the job.
     *
     *
     * @var string
     */
    protected $securityClearanceRequirement;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $qualifications;

    /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     *
     *
     * @var Date|string|null
     */
    protected $jobStartDate;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentiveCompensation;

    /**
     * The industry associated with the job position.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $industry;

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $employmentUnit;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string|Number|null
     */
    protected $baseSalary;

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
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
     *
     *
     * @var bool|null
     */
    protected $experienceInPlaceOfEducation;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $jobBenefits;

    /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $applicantLocationRequirements;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     *
     * @var string
     */
    protected $employmentType;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationRequirements;

    /**
     * Contact details for further information relevant to this job posting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $applicationContact;

    /**
     * The Occupation for the JobPosting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation|string
     */
    protected $relevantOccupation;

    /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
     *
     *
     * @var string
     */
    protected $eligibilityToWorkRequirement;

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
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $hiringOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHiringOrganization($hiringOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $hiringOrganization = self::checkTypes($hiringOrganization, $types);

        $this->hiringOrganization = $hiringOrganization;
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
     * @return Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null $estimatedSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "null",
        ];

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getSensoryRequirement()
    {
        return $this->sensoryRequirement;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $sensoryRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSensoryRequirement($sensoryRequirement)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $sensoryRequirement = self::checkTypes($sensoryRequirement, $types);

        $this->sensoryRequirement = $sensoryRequirement;
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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getPhysicalRequirement()
    {
        return $this->physicalRequirement;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $physicalRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhysicalRequirement($physicalRequirement)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $physicalRequirement = self::checkTypes($physicalRequirement, $types);

        $this->physicalRequirement = $physicalRequirement;
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
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $qualifications
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQualifications($qualifications)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $qualifications = self::checkTypes($qualifications, $types);

        $this->qualifications = $qualifications;
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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $industry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIndustry($industry)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $industry = self::checkTypes($industry, $types);

        $this->industry = $industry;
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
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $educationRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationRequirements($educationRequirements)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $educationRequirements = self::checkTypes($educationRequirements, $types);

        $this->educationRequirements = $educationRequirements;
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

}
