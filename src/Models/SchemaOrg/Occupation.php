<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Occupation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Occupation";
    }

    public static function fieldList() {
        $fields = [
            "educationRequirements" => "educationRequirements",
            "estimatedSalary" => "estimatedSalary",
            "experienceRequirements" => "experienceRequirements",
            "occupationLocation" => "occupationLocation",
            "occupationalCategory" => "occupationalCategory",
            "qualifications" => "qualifications",
            "responsibilities" => "responsibilities",
            "skills" => "skills",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $educationRequirements;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|string|Number|null
     */
    protected $estimatedSalary;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    protected $experienceRequirements;

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $occupationLocation;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Credential|string
     */
    protected $qualifications;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $skills;

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
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getOccupationLocation()
    {
        return $this->occupationLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $occupationLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationLocation($occupationLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $occupationLocation = self::checkTypes($occupationLocation, $types);

        $this->occupationLocation = $occupationLocation;
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

}
