<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Physician extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Physician";
    }

    public static function fieldList() {
        $fields = [
            "occupationalCategory" => "occupationalCategory",
            "medicalSpecialty" => "medicalSpecialty",
            "availableService" => "availableService",
            "usNPI" => "usNPI",
            "hospitalAffiliation" => "hospitalAffiliation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * A medical specialty of the provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    protected $medicalSpecialty;

    /**
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure|string
     */
    protected $availableService;

    /**
     * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National Provider Identifier</a> (NPI) 
     *     is a unique 10-digit identification number issued to health care providers in the United States by the Centers for Medicare and Medicaid Services.
     *
     *
     * @var string
     */
    protected $usNPI;

    /**
     * A hospital with which the physician or office is affiliated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Hospital|string
     */
    protected $hospitalAffiliation;

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
     * @return \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSpecialty|string $medicalSpecialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedicalSpecialty($medicalSpecialty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSpecialty",
            "string",
        ];

        $medicalSpecialty = self::checkTypes($medicalSpecialty, $types);

        $this->medicalSpecialty = $medicalSpecialty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure|string
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure|string $availableService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableService($availableService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "\OpenActive\Models\SchemaOrg\MedicalProcedure",
            "string",
        ];

        $availableService = self::checkTypes($availableService, $types);

        $this->availableService = $availableService;
    }

    /**
     * @return string
     */
    public function getUsNPI()
    {
        return $this->usNPI;
    }

    /**
     * @param string $usNPI
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsNPI($usNPI)
    {
        $types = [
            "string",
        ];

        $usNPI = self::checkTypes($usNPI, $types);

        $this->usNPI = $usNPI;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Hospital|string
     */
    public function getHospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Hospital|string $hospitalAffiliation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHospitalAffiliation($hospitalAffiliation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Hospital",
            "string",
        ];

        $hospitalAffiliation = self::checkTypes($hospitalAffiliation, $types);

        $this->hospitalAffiliation = $hospitalAffiliation;
    }

}
