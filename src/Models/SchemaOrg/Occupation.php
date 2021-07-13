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
            "experienceRequirements" => "experienceRequirements",
            "skills" => "skills",
            "estimatedSalary" => "estimatedSalary",
            "occupationLocation" => "occupationLocation",
            "responsibilities" => "responsibilities",
            "qualifications" => "qualifications",
            "occupationalCategory" => "occupationalCategory",
            "educationRequirements" => "educationRequirements",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OccupationalExperienceRequirements|string
     */
    protected $experienceRequirements;

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
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $occupationLocation;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $qualifications;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationRequirements;

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

}
