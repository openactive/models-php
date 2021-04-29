<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hospital extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Hospital";
    }

    public static function fieldList() {
        $fields = [
            "availableService" => "availableService",
            "healthcareReportingData" => "healthcareReportingData",
            "medicalSpecialty" => "medicalSpecialty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure
     */
    protected $availableService;

    /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CDCPMDRecord|\OpenActive\Models\SchemaOrg\Dataset
     */
    protected $healthcareReportingData;

    /**
     * A medical specialty of the provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty
     */
    protected $medicalSpecialty;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalProcedure $availableService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableService($availableService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "\OpenActive\Models\SchemaOrg\MedicalProcedure",
        ];

        $availableService = self::checkTypes($availableService, $types);

        $this->availableService = $availableService;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CDCPMDRecord|\OpenActive\Models\SchemaOrg\Dataset
     */
    public function getHealthcareReportingData()
    {
        return $this->healthcareReportingData;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CDCPMDRecord|\OpenActive\Models\SchemaOrg\Dataset $healthcareReportingData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthcareReportingData($healthcareReportingData)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CDCPMDRecord",
            "\OpenActive\Models\SchemaOrg\Dataset",
        ];

        $healthcareReportingData = self::checkTypes($healthcareReportingData, $types);

        $this->healthcareReportingData = $healthcareReportingData;
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

}
