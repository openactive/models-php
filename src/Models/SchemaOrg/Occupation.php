<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Occupation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $occupationLocation;

    /**
     * Skills required to fulfill this role or in this Occupation.
     *
     *
     * @var string
     */
    protected $skills;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

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
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var string
     */
    protected $experienceRequirements;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|null
     */
    protected $estimatedSalary;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOccupationLocation($occupationLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $occupationLocation = self::checkTypes($occupationLocation, $types);

        $this->occupationLocation = $occupationLocation;
    }

    /**
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param string $skills
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSkills($skills)
    {
        $types = array(
            "string",
        );

        $skills = self::checkTypes($skills, $types);

        $this->skills = $skills;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setResponsibilities($responsibilities)
    {
        $types = array(
            "string",
        );

        $responsibilities = self::checkTypes($responsibilities, $types);

        $this->responsibilities = $responsibilities;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return string
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * @param string $experienceRequirements
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setExperienceRequirements($experienceRequirements)
    {
        $types = array(
            "string",
        );

        $experienceRequirements = self::checkTypes($experienceRequirements, $types);

        $this->experienceRequirements = $experienceRequirements;
    }

    /**
     * @return decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param decimal|\OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|null $estimatedSalary
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = array(
            "decimal",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "null",
        );

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
    }

}
