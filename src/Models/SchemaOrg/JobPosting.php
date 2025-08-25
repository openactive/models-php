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
            "physicalRequirement" => "physicalRequirement",
            "qualifications" => "qualifications",
            "employmentType" => "employmentType",
            "jobImmediateStart" => "jobImmediateStart",
            "eligibilityToWorkRequirement" => "eligibilityToWorkRequirement",
            "incentiveCompensation" => "incentiveCompensation",
            "hiringOrganization" => "hiringOrganization",
            "datePosted" => "datePosted",
            "jobLocation" => "jobLocation",
            "securityClearanceRequirement" => "securityClearanceRequirement",
            "experienceRequirements" => "experienceRequirements",
            "estimatedSalary" => "estimatedSalary",
            "salaryCurrency" => "salaryCurrency",
            "jobBenefits" => "jobBenefits",
            "jobLocationType" => "jobLocationType",
            "relevantOccupation" => "relevantOccupation",
            "totalJobOpenings" => "totalJobOpenings",
            "skills" => "skills",
            "applicantLocationRequirements" => "applicantLocationRequirements",
            "directApply" => "directApply",
            "employerOverview" => "employerOverview",
            "validThrough" => "validThrough",
            "occupationalCategory" => "occupationalCategory",
            "sensoryRequirement" => "sensoryRequirement",
            "workHours" => "workHours",
            "employmentUnit" => "employmentUnit",
            "experienceInPlaceOfEducation" => "experienceInPlaceOfEducation",
            "responsibilities" => "responsibilities",
            "jobStartDate" => "jobStartDate",
            "baseSalary" => "baseSalary",
            "incentives" => "incentives",
            "applicationContact" => "applicationContact",
            "educationRequirements" => "educationRequirements",
            "specialCommitments" => "specialCommitments",
            "industry" => "industry",
            "benefits" => "benefits",
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
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $qualifications;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     *
     * @var string
     */
    protected $employmentType;

    /**
     * An indicator as to whether a position is available for an immediate start.
     *
     *
     * @var bool|null
     */
    protected $jobImmediateStart;

    /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
     *
     *
     * @var string
     */
    protected $eligibilityToWorkRequirement;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentiveCompensation;

    /**
     * Organization or Person offering the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $hiringOrganization;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $jobLocation;

    /**
     * A description of any security clearance requirements of the job.
     *
     *
     * @var string
     */
    protected $securityClearanceRequirement;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    protected $experienceRequirements;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|null
     */
    protected $estimatedSalary;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $jobBenefits;

    /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
     *
     *
     * @var string
     */
    protected $jobLocationType;

    /**
     * The Occupation for the JobPosting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation|string
     */
    protected $relevantOccupation;

    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     *
     *
     * @var int|null
     */
    protected $totalJobOpenings;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $skills;

    /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $applicantLocationRequirements;

    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
     *
     *
     * @var bool|null
     */
    protected $directApply;

    /**
     * A description of the employer, career opportunities and work environment for this position.
     *
     *
     * @var string
     */
    protected $employerOverview;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $sensoryRequirement;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     *
     * @var string
     */
    protected $workHours;

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $employmentUnit;

    /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
     *
     *
     * @var bool|null
     */
    protected $experienceInPlaceOfEducation;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     *
     *
     * @var Date|string|null
     */
    protected $jobStartDate;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $baseSalary;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentives;

    /**
     * Contact details for further information relevant to this job posting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $applicationContact;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationRequirements;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     *
     * @var string
     */
    protected $specialCommitments;

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
    protected $benefits;

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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $hiringOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHiringOrganization($hiringOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $hiringOrganization = self::checkTypes($hiringOrganization, $types);

        $this->hiringOrganization = $hiringOrganization;
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
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|Number|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|null $estimatedSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "Number",
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "string",
            "null",
        ];

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $skills
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSkills($skills)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $skills = self::checkTypes($skills, $types);

        $this->skills = $skills;
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
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $baseSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBaseSalary($baseSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
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

}
