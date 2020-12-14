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
            "healthcareReportingData" => "healthcareReportingData",
            "medicalSpecialty" => "medicalSpecialty",
            "availableService" => "availableService",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord
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
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|\OpenActive\Models\SchemaOrg\MedicalTest
     */
    protected $availableService;

    /**
     * @return \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord
     */
    public function getHealthcareReportingData()
    {
        return $this->healthcareReportingData;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord $healthcareReportingData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthcareReportingData($healthcareReportingData)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Dataset",
            "\OpenActive\Models\SchemaOrg\CDCPMDRecord",
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
