<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Physician extends \OpenActive\Models\SchemaOrg\MedicalBusiness
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
            "medicalSpecialty" => "medicalSpecialty",
            "hospitalAffiliation" => "hospitalAffiliation",
            "availableService" => "availableService",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical specialty of the provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    protected $medicalSpecialty;

    /**
     * A hospital with which the physician or office is affiliated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Hospital|string
     */
    protected $hospitalAffiliation;

    /**
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $availableService;

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

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|string $availableService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableService($availableService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "\OpenActive\Models\SchemaOrg\MedicalProcedure",
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
        ];

        $availableService = self::checkTypes($availableService, $types);

        $this->availableService = $availableService;
    }

}
