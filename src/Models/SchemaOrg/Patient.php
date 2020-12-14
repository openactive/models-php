<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Patient extends \OpenActive\Models\SchemaOrg\MedicalAudience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Patient";
    }

    public static function fieldList() {
        $fields = [
            "healthCondition" => "healthCondition",
            "diagnosis" => "diagnosis",
            "drug" => "drug",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $healthCondition;

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $diagnosis;

    /**
     * Specifying a drug or medicine used in a medication procedure
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug
     */
    protected $drug;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $healthCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthCondition($healthCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $healthCondition = self::checkTypes($healthCondition, $types);

        $this->healthCondition = $healthCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $diagnosis
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiagnosis($diagnosis)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $diagnosis = self::checkTypes($diagnosis, $types);

        $this->diagnosis = $diagnosis;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug $drug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrug($drug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
        ];

        $drug = self::checkTypes($drug, $types);

        $this->drug = $drug;
    }

}
