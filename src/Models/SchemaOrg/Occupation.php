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
            "estimatedSalary" => "estimatedSalary",
            "experienceRequirements" => "experienceRequirements",
            "responsibilities" => "responsibilities",
            "qualifications" => "qualifications",
            "educationRequirements" => "educationRequirements",
            "occupationLocation" => "occupationLocation",
            "occupationalCategory" => "occupationalCategory",
            "skills" => "skills",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|Number|null
     */
    protected $estimatedSalary;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var string
     */
    protected $experienceRequirements;

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
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $qualifications;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationRequirements;

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $occupationLocation;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CategoryCode
     */
    protected $occupationalCategory;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $skills;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|Number|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|Number|null $estimatedSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "Number",
            "null",
        ];

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
    }

    /**
     * @return string
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * @param string $experienceRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExperienceRequirements($experienceRequirements)
    {
        $types = [
            "string",
        ];

        $experienceRequirements = self::checkTypes($experienceRequirements, $types);

        $this->experienceRequirements = $experienceRequirements;
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
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $qualifications
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQualifications($qualifications)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        ];

        $qualifications = self::checkTypes($qualifications, $types);

        $this->qualifications = $qualifications;
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
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getOccupationLocation()
    {
        return $this->occupationLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $occupationLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationLocation($occupationLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $occupationLocation = self::checkTypes($occupationLocation, $types);

        $this->occupationLocation = $occupationLocation;
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

}
