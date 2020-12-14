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
            "hospitalAffiliation" => "hospitalAffiliation",
            "medicalSpecialty" => "medicalSpecialty",
            "availableService" => "availableService",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A hospital with which the physician or office is affiliated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Hospital
     */
    protected $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty
     */
    protected $medicalSpecialty;

    /**
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalTest
     */
    protected $availableService;

    /**
     * @return \OpenActive\Models\SchemaOrg\Hospital
     */
    public function getHospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Hospital $hospitalAffiliation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHospitalAffiliation($hospitalAffiliation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Hospital",
        ];

        $hospitalAffiliation = self::checkTypes($hospitalAffiliation, $types);

        $this->hospitalAffiliation = $hospitalAffiliation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSpecialty
     */
    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSpecialty $medicalSpecialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedicalSpecialty($medicalSpecialty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSpecialty",
        ];

        $medicalSpecialty = self::checkTypes($medicalSpecialty, $types);

        $this->medicalSpecialty = $medicalSpecialty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalTest
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalTest $availableService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableService($availableService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalProcedure",
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "\OpenActive\Models\SchemaOrg\MedicalTest",
        ];

        $availableService = self::checkTypes($availableService, $types);

        $this->availableService = $availableService;
    }

}
