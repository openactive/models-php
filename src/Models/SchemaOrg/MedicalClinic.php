<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalClinic extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalClinic";
    }

    public static function fieldList() {
        $fields = [
            "availableService" => "availableService",
            "medicalSpecialty" => "medicalSpecialty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical service available from this provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|\OpenActive\Models\SchemaOrg\MedicalProcedure|\OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $availableService;

    /**
     * A medical specialty of the provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    protected $medicalSpecialty;

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

}
